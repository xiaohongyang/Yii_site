<?php

use yii\db\Migration;

/**
 * Handles the creation of table `btn`.
 */
class m170922_042247_create_btn_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tq_btn', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->comment('按钮名称')->notNull()->defaultValue(''),
            'display_text' => $this->string()->comment('前台展示文字')->notNull()->defaultValue(''),
            'link' => $this->string()->comment('跳转目标地址')->notNull()->defaultValue('')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tq_btn');
    }
}
