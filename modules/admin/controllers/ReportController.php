<?php
/**
 * Created by PhpStorm.
 * User: admin_
 * Date: 2017/9/23
 * Time: 20:02
 */

namespace app\modules\admin\controllers;


use app\service\BtnService;
use app\service\PageService;
use yii\web\Response;

class ReportController extends BaseController
{

    public function actionIndex(){

        return $this->render('index');
    }

    public function actionBtnReportData(){


        $service = new BtnService();

        $list = $service->getReport();

        return $this->renderJson(1, 'success', $list);

    }

    public function actionPageReportData(){


        $service = new PageService();

        $list = $service->getReport();

        return $this->renderJson(1, 'success', $list);

    }

}