<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2017/9/22
 * Time: 13:27
 */

namespace app\service;


use app\dao\BtnDao;
use app\models\BtnModel;

class BtnService
{

    public $error = [];
    public $model;

    public function __construct(BtnModel $model=null)
    {

        $this->model = is_null($model) ? new BtnModel() : $model;
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


    public static function getItem($id) {
        $service = new static();
        $item = $service->model->findOne($id);
        return $item;
    }


    public function getReport() {

        $btnDao = new BtnDao();
        $list = $btnDao->find()
            ->with(['click' => function ($query) {
                $query->select('*');
            }])
            ->asArray()
            ->all();

        if(count($list)){
            foreach ($list as $k=>$item) {
                $list[$k]['tracking_count'] = (int)count($item['click']);
            }
        }

        return $list;
    }

}