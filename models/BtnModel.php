<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tq_btn".
 *
 * @property integer $id
 * @property string $name
 * @property string $display_text
 * @property string $link
 */
class BtnModel extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tq_btn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'display_text', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'display_text' => '页面中显示内容',
            'link' => '跳转目标地址',
        ];
    }
}
