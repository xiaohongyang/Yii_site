<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page_tracking`.
 */
class m170922_044406_create_page_tracking_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tq_page_show_tracking', [
            'id' => $this->primaryKey(),
            'page_id'=> $this->integer()->notNull()->defaultValue(0)->comment('按钮id'),
            'ip' => $this->string()->notNull()->defaultValue('')->comment('访问ip'),
            'created_at' => $this->integer()->unsigned()->notNull()->defaultValue(0)->comment('添加时间'),
            'updated_at' => $this->integer()->unsigned()->notNull()->defaultValue(0)->comment('更新时间')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tq_page_show_tracking');
    }
}
