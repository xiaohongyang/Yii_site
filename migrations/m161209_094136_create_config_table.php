<?php

use yii\db\Migration;

/**
 * Handles the creation of table `config`.
 */
class m161209_094136_create_config_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tq_config', [
            'id' => $this->primaryKey(),
            'we_chat_app_id' => $this->string(100)->notNull()->defaultValue('')->comment('微信账号app id'),
            'we_chat_secret' => $this->string(100)->notNull()->defaultValue('')->comment('微信账号secret') ,
            'we_chat_token' => $this->string(100)->notNull()->defaultValue('')->comment('微信账号token') ,
            'admin_mobile' => $this->string(255)->notNull()->defaultValue('')->comment('接收短信的管理员手机号, 多个手机号用,逗号隔开'),
            'webName' => $this->string(50)->notNull()->defaultValue('')->comment('网站名称'),
            'distance_limit' => $this->integer(10)->notNull()->defaultValue(0)->comment('匹配距离,以米为单位.如:1000为1公里'),
            'clock_time_limit' => $this->smallInteger(3)->notNull()->defaultValue(0)->comment('上班时间限制,分钟为单位.如:120为2小时'),
            'off_duty_limit' => $this->smallInteger(3)->notNull()->defaultValue(0)->comment('下班时间限制,分钟为单位.如:120为2小时'),
            'webName' => $this->string(50)->notNull()->defaultValue('')->comment('网站名称'),
            'send_msg' => $this->smallInteger(1)->notNull()->defaultValue(0)->comment('是否发送短信'),
            'created_at' => $this->integer()->notNull()->defaultValue(0)->comment('添加时间'),
            'updated_at' => $this->integer()->notNull()->defaultValue(0)->comment('更新时间'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tq_config');
    }
}
