<?php

use yii\db\Migration;

/**
 * Handles adding page_name to table `page`.
 */
class m170923_091550_add_page_name_column_to_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $type = $this->string()->comment('页面名称')->notNull()->defaultValue('');
        $this->addColumn('tq_page', 'page_name', $type);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('tq_page', 'page_name');
    }
}
