<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%btn}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $display_text
 * @property string $link
 */
class BtnCURD extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%btn}}';
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
            'name' => '按钮名称',
            'display_text' => '前台展示文字',
            'link' => '跳转目标地址',
        ];
    }

    /**
     * @inheritdoc
     * @return BtnQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BtnQuery(get_called_class());
    }
}
