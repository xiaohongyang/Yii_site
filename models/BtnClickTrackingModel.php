<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tq_btn_click_tracking".
 *
 * @property integer $id
 * @property integer $btn_id
 * @property string $ip
 * @property integer $created_at
 * @property integer $updated_at
 */
class BtnClickTrackingModel extends BaseModel
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
        return 'tq_btn_click_tracking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['btn_id', 'created_at', 'updated_at'], 'integer'],
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
            'btn_id' => '按钮id',
            'ip' => '访问Ip地址',
            'created_at' => '点击时间',
            'updated_at' => 'Updated At',
        ];
    }
}
