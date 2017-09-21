<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2016/12/8
 * Time: 22:24
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\ConfigModel;
use yii\helpers\Url;

class IndexController extends BaseController
{
    public function actionIndex(){

        $configModel = ConfigModel::findOne(1);

        if (\Yii::$app->request->isPost) {
            $rs = $configModel->edit(\Yii::$app->request->post());
            if ($rs) {
                \Yii::$app->session->setFlash('message', '修改成功');
            } else {
                \Yii::$app->session->setFlash('message', '修改失败');
            }
            return $this->goBack(Url::to(['/admin/index/index']));
        }

        return $this->render('index', ['model' => $configModel]);
    }
}