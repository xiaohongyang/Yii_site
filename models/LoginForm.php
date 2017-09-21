<?php

namespace app\models;

use app\common\components\helpers\MobileMsgHelpers;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 */
class LoginForm extends Model
{

    public $_user = false;
    public $mobile='';

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {

        $data = Yii::$app->request->post();
        $mobile = $data['mobile'];
        $code = $data['code'];
        $inviteCode = Yii::$app->request->post('invite_code', '');
        if ($inviteCode)
            $inviteCode = trim($inviteCode);

        $rs = false;
        if(empty($mobile) || !trim($mobile)){
            Yii::$app->session->setFlash('message', '手机号不能为空');
        } else if(empty($code) || !trim($code)) {
            Yii::$app->session->setFlash('message', '验证码不能为空');
        }else if($inviteCode && !preg_match("#^[\d]{3}$#", $inviteCode)){
            Yii::$app->session->setFlash('message', '邀请码格式错误');
        } else if($inviteCode && UserModel::findOne(['mobile' => $mobile]) && UserModel::findOne(['mobile' => $mobile])->invite_code){
            Yii::$app->session->setFlash('message', '邀请码已经存在');
        } else if(!$this->checkMobileCode($mobile, $code)){
            Yii::$app->session->setFlash('message', '验证码错误');
        } else {

            $this->mobile = $mobile;
            $user = $this->getUser($mobile);
            if(!$user){
                //创建用户
                $registerModel = new RegisterModel();
                $createResult = $registerModel->create(['mobile' => $mobile]);
                if(!$createResult){
                    Yii::$app->session->setFlash('message', '创建用户失败!');
                }else{
                    //创建成功,获取用户
                    $rs = true;
                }
            } else {
                $rs = true;
            }
        }
        if($rs){
            Yii::$app->user->login($this->getUser($mobile),3600*24);
            //登录成功后
            //1.更新微信信息
            $user = UserModel::findOne(['mobile' => $mobile]);
            $user->updateLoginTime();
            if ($this->getWeChatOpenId()){
                $user->updateWeChat($this->getWeChatOpenId());
            }
            //2.如果有邀请码，更新邀请码
            if ($inviteCode) {
                $user->updateInviteCode($inviteCode);
            }
        }
        return $rs;
    }


    public function getUser($mobile)
    {
        if ($this->_user == false) {
            $this->_user = UserIdentity::findByMobile($mobile);
        }
        return $this->_user;
    }


    public function getWeChatOpenId(){
        $cookies = \Yii::$app->request->cookies;
        return $cookies->has('wxOpenid') ? $cookies->get('wxOpenid')->value : '' ;
    }

    public function getMobileCheckcode($mobile){

        $error = $this->_getMobileCheckcodeHandle($mobile);
        if($error !== true)
            return $error;
        else{
            //生成验证码
            $checkCode = $this->_setMobilecode($mobile);

            //发送验证码，并返回到前端
            MobileMsgHelpers::getInstance()->send($mobile, "您的验证码为". $checkCode);
            return true;
        }
    }

    /**
     * 获取手机验证码前数据验证
     * @param $mobile
     * @return bool|string
     */
    private function _getMobileCheckcodeHandle($mobile){

        if(! \Yii::$app->request->isPost)

            return "非法请求!";
        else {

            //1.判断手机号是否正确
            if(empty($mobile))
                return "手机号码不能为空!";
            $mobile = trim($mobile);
            if(strlen($mobile) != 11 || !preg_match("#1[\d]{10}#", $mobile))
                return "非法手机号码";
            //2.判断手机号是否已经存在
//            if( UserModel::findOne(['mobile'=>$mobile]) )
//                return "手机号已经存在!";
            else
                return true;
        }

    }

    /**
     * 设置并返回手机验证码
     * @param $mobile
     * @return int
     */
    private function _setMobilecode($mobile){

        $checkCode = rand(10000,99999);
        $key = 'mobile_check_code_'.$mobile;
        \Yii::$app->session->set($key, $checkCode);
        return $checkCode;
    }

    /**
     * 获取指定手机验证码
     * @param $mobile
     * @return mixed
     */
    public function getMobilecode($mobile){

        $key = 'mobile_check_code_'.$mobile;
        return \Yii::$app->session->get($key);
    }

    /**
     *  validate mobile code
     */
    public function checkMobileCode($mobile, $code){

        if (Yii::$app->params['is_close_login_code_check'])
            return true;

        return $this->getMobilecode($mobile) == $code;
    }
}
