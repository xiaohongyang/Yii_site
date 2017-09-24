<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[GuestBookModel]].
 *
 * @see GuestBookModel
 */
class GuestBookQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return GuestBookModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return GuestBookModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
