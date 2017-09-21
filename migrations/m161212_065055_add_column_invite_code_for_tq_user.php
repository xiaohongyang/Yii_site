<?php

use yii\db\Migration;

class m161212_065055_add_column_invite_code_for_tq_user extends Migration
{
    public function up()
    {
        $this->addColumn('tq_user', 'invite_code', $this->string(10)->notNull()->defaultValue('')->comment('邀请码'));
    }

    public function down()
    {
        echo "m161212_065055_add_column_invite_code_for_tq_user cannot be reverted.\n";
        $this->dropColumn('tq_user');
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
