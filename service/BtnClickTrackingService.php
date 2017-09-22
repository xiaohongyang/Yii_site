<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2017/9/22
 * Time: 13:27
 */

namespace app\service;


use app\models\BtnClickTrackingModel;
use app\models\BtnModel;

class BtnClickTrackingService
{

    public $error = [];
    protected $model;

    public function __construct(BtnClickTrackingModel $model=null)
    {

        $this->model = is_null($model) ? new BtnClickTrackingModel() : $model;
    }

    public function create($data) {

        $rs = false;
        if(!$this->model->create($data)){
            $this->error = $this->model->getFirstErrors();
        } else {
            $rs = true;
        }
        return $rs;
    }

    

}