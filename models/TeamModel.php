<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/11/29
 * Time: 20:39
 */

namespace app\models;


use app\common\components\helpers\MobileMsgHelpers;
use phpDocumentor\Reflection\Types\Boolean;
use yii\base\Exception;
use yii\base\InvalidCallException;
use yii\behaviors\TimestampBehavior;
use yii\log\Logger;

class TeamModel extends BaseModel
{
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className()
            ]
        ];
    }


    public static function tableName()
    {
        return \Yii::$app->db->tablePrefix . 'team';
    }

    public function getTeamUsers(){
        return $this->hasMany(TeamUserModel::className(), ['team_id' => 'team_id']);
    }

    /**
     * 组成员用户collection
     * @return $this
     */
    public function getUsers(){
        return $this->hasMany(UserModel::className(), [ 'id' => 'user_id' ])
            ->via('teamUsers');
    }

    /**
     * 组添加乘客/司机(司机只在创建的时候添加)
     * @param UserModel $user
     * @return bool
     */
    public function addUser(UserModel $user) {
        $result = false;
        if($user->is_matched) {
            $this->message = "用户已经匹配过,不能重复匹配";
        } else if($this->family_number == self::CONT_MAX_FAMILY_NUMBER){
            $this->message = "通勤小组人数已满";
        } else {
            $result = $this->_addUser($user);
        }
        return $result;
    }

    /**
     * 组添加乘客/司机(司机只在创建的时候添加)
     * @param UserModel $user
     * @return bool
     */
    private function _addUser(UserModel $user){

        $rs = false;
        $transaction = $this->getConnection()->beginTransaction();
        try {
            $this->link('users', $user);
            //用户数加1
            $this->family_number += 1;
            $rs = $this->save();
            $user->updateIsMatched(true);
            $rs && $transaction->commit();
            $info = sprintf("组(%s)添加成员(%s)当前成员数(%s)", $this->team_id, $user->id, $this->family_number);
            \Yii::getLogger()->log($info, Logger::LEVEL_INFO);
        } catch (InvalidCallException $e) {
            \Yii::getLogger()->log($e->getMessage(), Logger::LEVEL_ERROR);
            $transaction->rollBack();
        } catch (Exception $e) {
            \Yii::getLogger()->log($e->getMessage(), Logger::LEVEL_ERROR);
            $transaction->rollBack();
        }
        return $rs;
    }

    /**
     * 创建组
     * @param UserModel $driver 司机
     * @param UserModel $passenger 乘客
     * @return bool 创建成功返回 true 或者 false
     * @throws \Exception
     */
    public function create(UserModel $driver, UserModel $passenger) {

        $rs = false;
        if($driver->id != $passenger->id){

            $transaction = $this->getConnection()->beginTransaction();

            try {
                if (!is_null($driver->userInfo) && $driver->userInfo->role != self::ROLE_DRIVER) {

                    $this->message = "用户不是司机";
                } else if (!$driver->is_matched && !$passenger->is_matched) {

                    //创建组
                    $team = new TeamModel();
                    $team->family_number = 0;
                    $team->driver_user_id = $driver->id;
                    $rsCreateTeam = $team->save();
                    //添加司机
                    $rsAddDriver = $team->addUser($driver);
                    //添加乘客
                    $rsAddPassenger = $team->addUser($passenger);
                    $rs = $rsCreateTeam && $rsAddDriver && $rsAddPassenger;
                }
                if($rs)
                    $transaction->commit();

            } catch (Exception $e) {
                $transaction->rollBack();
                \Yii::getLogger()->log($e->getMessage(), Logger::LEVEL_ERROR);
                throw $e;
            }
        } else {
            \Yii::getLogger()->log("自己不能和自己进行匹配建组!". $passenger->id, Logger::LEVEL_INFO);
        }
        return $rs;
    }

    /**
     * 组司机
     * @return null|\yii\db\ActiveQuery
     */
    public function getDriver() {

        return $this->hasOne(UserModel::className(), [
            'id' => 'driver_user_id'
        ]);
    }

    /**
     * 更新组信息前,判断成员数是超额
     * @param bool $insert
     * @return bool
     * @throws Exception
     */
    public function beforeSave($insert)
    {
        if (!$insert && $this->family_number > 4){

            \Yii::getLogger()->log("family_number 不能大于" . self::CONT_MAX_FAMILY_NUMBER);
            throw new Exception("family_number 不能大于" . self::CONT_MAX_FAMILY_NUMBER);
            return false;
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    public function getClockTimeHour(){

        $clockTimeHour = $this->clock_time_hour ? : $this->driver->userInfo->clock_time_hour;
        $clockTimeHour = (strlen($clockTimeHour) == 1 ? 0: '') . $clockTimeHour;
        return $clockTimeHour;
    }

    public function getClockTimeMinutes(){

        $clockTimeMinutes = $this->clock_time_minutes ? : $this->driver->userInfo->clock_time_minutes;
        $clockTimeMinutes = (strlen($clockTimeMinutes) == 1 ? 0: '') . $clockTimeMinutes;
        return $clockTimeMinutes;
    }

    public function getOffDutyHour(){

        $offDutyHour = $this->off_duty_hour ? : $this->driver->userInfo->off_duty_hour;
        $offDutyHour = (strlen($offDutyHour) == 1 ? 0: '') . $offDutyHour;
        return $offDutyHour;
    }

    public function getOffDutyMinutes(){

        $offDutyMinutes = $this->off_duty_minutes ? : $this->driver->userInfo->off_duty_minutes;
        $offDutyMinutes = (strlen($offDutyMinutes) == 1 ? 0: '') . $offDutyMinutes;
        return $offDutyMinutes;
    }


    /**
     * 撤销用户 乘客撤销，小组减少一人；司机撤销，整个小组解散
     * @param UserModel $user
     * @return bool
     */
    public function cancel(UserModel $user){

        $rs = false;
        $mobile = \Yii::$app->params['admin_mobile'];
        $routeName = $this->route_name ? : $this->driver->userInfo->home_address.'-' . $this->driver->userInfo->company_address;
        if($this->driver_user_id == $user->id) {

            $mobile = $mobile.','.$this->driver->mobile;
            $message = sprintf("司机撤销小组，司机手机号为：%s，小组线路为：%s",$this->driver->mobile, $routeName);

            $teamUser = $this->teamUsers;
            foreach ($teamUser as $item){
                $user = $item->user;
                if($user instanceof UserModel){
                    $user->updateIsMatched(false);
                }
                $this->unlink('users', $user, true);
            }
            $this->driver->updateIsMatched(false);
            $this->driver->save();
            $rs = $this->delete();

        } else {
            try {
                $mobile = $mobile.','.$this->driver->mobile.','.$user->mobile;
                $message = sprintf("乘客退出小组，司机手机号为：%s，乘客手机号为：%s，小组线路为：%s",$this->driver->mobile,$user->mobile, $routeName);
                $user->is_matched = 0;
                $user->save();
                $this->unlink('users', $user, true);
                $this->family_number -= 1;
                $rs = $this->save();
            } catch (Exception $e) {
                \Yii::getLogger()->log($e->getMessage(), Logger::LEVEL_ERROR);
            }
        }
        if($rs){
            \Yii::getLogger()->log($message.'短信接收手机号：'.$mobile, Logger::LEVEL_ERROR);
            if (\Yii::$app->params['send_notice_msg']) {
                MobileMsgHelpers::getInstance()->send($mobile, $message);
            }
        }
        return $rs;
    }
}