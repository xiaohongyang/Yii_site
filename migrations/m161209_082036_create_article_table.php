<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m161209_082036_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tq_article', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull()->comment('标题'),
            'link' => $this->string(255)->notNull()->comment('跳转链接'),
            'pic' => $this->string(255)->notNull()->comment('图片地址'),
            'created_at' => $this->integer()->notNull()->defaultValue(0)->comment('添加时间'),
            'updated_at' => $this->integer()->notNull()->defaultValue(0)->comment('更新时间'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tq_article');
    }
}
