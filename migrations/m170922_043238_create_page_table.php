<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page`.
 */
class m170922_043238_create_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tq_page', [
            'id' => $this->primaryKey(),
            'title' => $this->text()->comment('标题'),
            'content_1' => $this->text()->comment('内容1'),
            'content_2' => $this->text()->comment('内容2'),
            'content_3' => $this->text()->comment('内容3'),
            'content_4' => $this->text()->comment('内容4'),
            'content_5' => $this->text()->comment('内容5'),
            'content_6' => $this->text()->comment('内容6'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tq_page');
    }
}
