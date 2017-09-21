<?php

use yii\db\Migration;

class m161208_135958_create_table_admin extends Migration
{
    public function up()
    {
        $this->createTable('tq_admin', [
            'id' => $this->primaryKey()->comment('主键'),
            'username' => $this->string(50)->notNull()->comment('用户名')->unique(),
            'password' => $this->string(100)->notNull()->comment('用户密码'),
            'mobile' => $this->string(20)->notNull()->comment('用户手机号')->unique(),
            'authKey' => $this->string(100)->notNull()->comment('authKey')->defaultValue(''),
            'accessToken' => $this->string(100)->notNull()->defaultValue('')->comment('accessToken'),
            'created_at' => $this->integer(10)->defaultValue(0)->comment('添加时间'),
            'updated_at' => $this->integer(10)->defaultValue(0)->comment('更新时间')
        ]);
    }

    public function down()
    {
        echo "m161208_135958_create_table_admin cannot be reverted.\n";
        $this->dropTable('tq_admin');
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
