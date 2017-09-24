<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PageModel]].
 *
 * @see PageModel
 */
class PageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PageModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PageModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
