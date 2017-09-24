<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang
 * Date: 2017/9/22
 * Time: 13:27
 */

namespace app\service;


use app\dao\GuestBookDao;
use app\dao\PageDao;
use app\models\BtnModel;

class PageService
{

    public $error = [];
    public $model;

    public function __construct(PageDao $model=null)
    {

        $this->model = is_null($model) ? new PageDao()  : $model;
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


    public function getReport(){
        $dao = new PageDao();
        $list = $dao->find()
                ->with(['tracking' => function($query){
                    $query->select('*');
                }])
                ->asArray()
                ->all();

        if(count($list)) {
            foreach ($list as $k=>$item) {
                $list[$k]['tracking_count'] = count($item['tracking']);
            }
        }

        return $list;
    }

}