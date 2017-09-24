<?php

use yii\db\Migration;

class m170923_095837_modify_page_table_drop_multy_column extends Migration
{
    public function safeUp()
    {

        $this->dropColumn('tq_page', 'content_2');
        $this->dropColumn('tq_page', 'content_3');
        $this->dropColumn('tq_page', 'content_4');
        $this->dropColumn('tq_page', 'content_5');
        $this->dropColumn('tq_page', 'content_6');

    }

    public function safeDown()
    {
        echo "m170923_095837_modify_page_table_drop_multy_column cannot be reverted.\n";

        $type = $this->text();
        $this->addColumn('tq_page', 'content_2', $type);
        $this->addColumn('tq_page', 'content_3', $type);
        $this->addColumn('tq_page', 'content_4', $type);
        $this->addColumn('tq_page', 'content_5', $type);
        $this->addColumn('tq_page', 'content_6', $type);
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170923_095837_modify_page_table_drop_multy_column cannot be reverted.\n";

        return false;
    }
    */
}
