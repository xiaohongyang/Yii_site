<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tq_page".
 *
 * @property integer $id
 * @property string $page_name
 * @property string $title
 * @property string $content_1
 */
class PageModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tq_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content_1'], 'string'],
            [['page_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_name' => '页面名称',
            'title' => '标题',
            'content_1' => '内容',
        ];
    }

    /**
     * @inheritdoc
     * @return PageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PageQuery(get_called_class());
    }
}
