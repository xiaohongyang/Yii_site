<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/11/25
 * Time: 20:46
 */

namespace app\models;


use yii\base\Exception;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FileHelper;
use yii\log\Logger;
use yii\web\UploadedFile;

class RegisterUserInfoModel extends BaseModel
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
        return \Yii::$app->db->tablePrefix.'user_info';
    }

    public function formName()
    {
        return \Yii::$app->db->tablePrefix.'user_info';
    }

    public function getUser(){
        return $this->hasOne(UserModel::className(), [
            'id' => 'user_id'
        ]);
    }

    public $mobile;

    public $userId;
    public $sex;
    public $clockTime;
    public $offDutyTime;
    public $homeAddress;
    public $homeLongitude;
    public $homeLatitude;
    public $companyAddress;
    public $companyLongitude;
    public $companyLatitude;
    public $role;
    public $idCardFront;
    public $idCardBack;
    public $driverCard;
    public $timeliness;

    public function scenarios()
    {
        return [
            self::SCENARIO_CREATE => [
                'mobile',
                'sex',
                'clockTime',
                'offDutyTime',
                'homeAddress',
                'homeLongitude',
                'homeLatitude',
                'companyAddress',
                'companyLongitude',
                'companyLatitude',
                'role',
                'idCardFront',
                'idCardBack',
                'driverCard',
                'timeliness',
            ], self::SCENARIO_UPDATE => [
                'mobile',
                'sex',
                'clockTime',
                'offDutyTime',
                'homeAddress',
                'homeLongitude',
                'homeLatitude',
                'companyAddress',
                'companyLongitude',
                'companyLatitude',
                'role',
                'idCardFront',
                'idCardBack',
                'driverCard',
                'timeliness',
            ]
        ];
    }


    public function rules(){

        $rules = [
            [['sex',
                'homeAddress', 'homeLongitude', 'homeLatitude', 'companyAddress', 'companyLongitude', 'companyLatitude',
                'role','timeliness'], 'required', 'on' => [self::SCENARIO_CREATE, self::SCENARIO_UPDATE]],
            [
                'clockTime', 'required', 'on' => [self::SCENARIO_CREATE, self::SCENARIO_UPDATE], 'message' => '请填打卡时间'
            ],[
                'offDutyTime', 'required', 'on' => [self::SCENARIO_CREATE, self::SCENARIO_UPDATE], 'message' => '请填下班时间'
            ],
            [
                'mobile',function($attribute, $params){
                    if(!preg_match('#[0-9]{11}#', $this->$attribute)){
                        $this->addError($attribute, '手机号不合法');
                    }
                }, 'on' => [self::SCENARIO_CREATE, self::SCENARIO_UPDATE]
            ],

        ];

        return $rules;
    }

    public function attributeLabels($attribute)
    {
        return [
            'mobile' => '手机号码',
            'sex' => '性别',
            'clockTime' => '上班时间',
            'offDutyTime' => '下班时间',
            'homeAddress' => '家庭住址',
            'homeLongitude' => '家庭住址经度',
            'homeLatitude' => '家庭住址纬度',
            'companyAddress' => '公司地址',
            'companyLongitude' => '公司地址经度',
            'companyLatitude' => '公司地址纬度',
            'role' => '角色'
        ];
    }


    /**
     * 创建或更新用户信息,user_info表
     * @param $data
     * @return bool
     */
    public function create($data){

        $rs = false;

        if($this->getAttribute('id')) {
            //更新
            $this->setScenario(self::SCENARIO_UPDATE);
        } else {
            //添加
            $this->setScenario(self::SCENARIO_CREATE);
        }

        if (!key_exists(self::formName(), $data)) {
            $data = [self::formName() => $data];
        }

        if ( $this->load($data) && $this->validate()) {

            $transaction = \Yii::$app->db->beginTransaction();
            try {
                $rs = $this->_saveUserInfo();
                if($rs){
                    $transaction->commit();
                } else {
                    $transaction->rollBack();
                    \Yii::$app->log->getLogger()->log("添加用户信息失败!");
                }
            } catch (Exception $e) {
                \Yii::getLogger()->log($e->getMessage(),Logger::LEVEL_ERROR);
                $transaction->rollBack();
            }
        }
        return $rs;
    }

    private function _saveUserInfo(){

        if($this->role == self::ROLE_DRIVER){
            $this->upload();
            if(is_array($this->getFirstErrors()) && count($this->getFirstErrors())>0){
                throw new Exception("添加用户信息表记录失败.error:".implode('|', $this->getFirstErrors()));
            }
        }

        if($this->scenario == self::SCENARIO_CREATE){
            $model = new UserInfoForm();
        } else {
            $model = UserInfoForm::findOne(['id' => $this->getAttribute('id')]);
        }
        $clockTimeArr = explode(':', $this->clockTime);
        list($clockTimeHour, $clockTimeMinutes) = $clockTimeArr;

        $offDutyTimeArr = explode(':', $this->offDutyTime);
        list($offDutyTimeHour, $offDutyTimeMinutes) = $offDutyTimeArr;

        $data = [
            'userId' => \Yii::$app->user->id,
            'sex' => $this->sex,
            'clockTimeHour' => $clockTimeHour,
            'clockTimeMinutes' => $clockTimeMinutes,
            'offDutyHour' => $offDutyTimeHour,
            'offDutyMinutes' => $offDutyTimeMinutes,
            'homeAddress' => $this->homeAddress,
            'homeLongitude' => $this->homeLongitude,
            'homeLatitude' => $this->homeLatitude,
            'companyAddress' => $this->companyAddress,
            'companyLongitude' => $this->companyLongitude,
            'companyLatitude' => $this->companyLatitude,
            'role' => $this->role,
            'idCardFront' => $this->idCardFront,
            'idCardBack' => $this->idCardBack,
            'driverCard' => $this->driverCard,
            'timeliness' => $this->timeliness,
        ];

        $rs = $model->create($data);
        if (!$rs) {
            if($this->scenario == self::SCENARIO_CREATE){
                throw new Exception("添加用户信息表记录失败.error:".implode('|', $model->getFirstErrors()));
            } else {
                throw new Exception("更新用户信息表记录失败.error:".implode('|', $model->getFirstErrors()));
            }
        }
        return $rs;
    }

    public function upload()
    {
        try {

            $dir = 'uploads/'.\Yii::$app->user->id;
            if(!file_exists($dir)){
                mkdir($dir, 0777, true );
            }

            $op = UploadedFile::getInstance($this, 'idCardFront');
            $saveFilePath = 'uploads/'.\Yii::$app->user->id.'/idCardFront'.'.'.$op->extension;
            $this->_uploadHandle($op, 'idCardFront', $saveFilePath);

            $op = UploadedFile::getInstance($this, 'idCardBack');
            $saveFilePath = 'uploads/'.\Yii::$app->user->id.'/idCardBack'.'.'.$op->extension;
            $this->_uploadHandle($op, 'idCardBack', $saveFilePath);

            $op = UploadedFile::getInstance($this, 'driverCard');
            $saveFilePath = 'uploads/'.\Yii::$app->user->id.'/driverCard'.'.'.$op->extension;
            $this->_uploadHandle($op, 'driverCard', $saveFilePath);

            if(is_array($this->getFirstErrors()) && count($this->getFirstErrors())){
                //删除注册失败的文件夹
                FileHelper::removeDirectory($dir);
            }
        } catch (Exception $e) {
            \Yii::getLogger()->log($e->getMessage());
            $this->addError('idCardFront', '上传失败');
        }

    }

    private function _uploadHandle($handle, $field, $saveFilePath, $extension){
        if(is_null($handle)) {
            switch ($field) {
                case 'idCardFront' :
//                    $this->addError($field, '请上传身份证正面文件');
                    break;
                case 'idCardBack' :
//                    $this->addError($field, '请上传身份证反面文件');
                    break;
                case 'driverCard' :
//                    $this->addError($field, '请上传驾驶证文件');
                    break;
            }
        }else if(!in_array($handle->extension, ['jpg', 'png'])){
            $this->addError($field, '文件类型不合法');
        } else if(!$handle->saveAs($saveFilePath)){
            $this->addError($field, '上传失败');
        } else {
            if($saveFilePath)
                $this->$field = $saveFilePath;
        }
    }

    public function afterSave($insert, $changedAttributes)
    {

        if ($insert){
            //插入数据成功，将用户状态自动设置为审核成功
            UserModel::findOne(['id'=>$this->getAttribute('user_id')])->updateUserStatus(UserModel::CONST_STATUS_VALIDATE_SUCCESS);
        }

        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
    }


}