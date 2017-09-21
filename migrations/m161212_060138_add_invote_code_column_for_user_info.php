<?php

use yii\db\Migration;

class m161212_060138_add_invote_code_column_for_user_info extends Migration
{
    public function up()
    {
        $this->addColumn('tq_user_info', 'invite_code', $this->string(10)->notNull()->defaultValue('')->comment('邀请码'));
    }

    public function down()
    {
        echo "m161212_060138_add_invote_code_column_for_user_info cannot be reverted.\n";
        $this->dropColumn('tq_user_info', 'invite_code');
        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
