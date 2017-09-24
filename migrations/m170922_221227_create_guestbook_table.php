<?php

use yii\db\Migration;

/**
 * Handles the creation of table `guestbook`.
 */
class m170922_221227_create_guestbook_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tq_guestbook', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull()->defaultValue('')->comment('留言者邮箱'),
            'content' => $this->text()->comment('留言内容'),
            'created_at' => $this->integer()->unsigned()->notNull()->defaultValue(0)->comment('添加时间'),
            'updated_at' => $this->integer()->unsigned()->notNull()->defaultValue(0)->comment('更新时间')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tq_guestbook');
    }
}
