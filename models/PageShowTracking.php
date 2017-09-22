<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tq_page_show_tracking".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string $ip
 * @property integer $created_at
 * @property integer $updated_at
 */
class PageShowTracking extends BaseModel
{

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className()
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tq_page_show_tracking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id', 'created_at', 'updated_at'], 'integer'],
            [['ip'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => '页面id',
            'ip' => '访问Ip',
            'created_at' => '访问时间',
            'updated_at' => 'Updated At',
        ];
    }



}
