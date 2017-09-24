<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%guestbook}}".
 *
 * @property integer $id
 * @property string $email
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 */
class GuestBookModel extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%guestbook}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => '留言者邮箱',
            'content' => '留言内容',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

    /**
     * @inheritdoc
     * @return GuestBookQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GuestBookQuery(get_called_class());
    }
}
