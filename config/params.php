<?php

const STATUS_NOT_LOGIN = -99;
return [
    'adminEmail' => 'admin@example.com',
    //是否启用验证码
    'is_close_login_code_check' => true,
    //是否是开发环境
    'is_develop' => false,



    //微信配置
    'we_chat_app_id' => 'wx2887eeeac1e7d898',
    'we_chat_secret' => 'a2fb0cb1798fd734be9fda0edfdd3ead',
    'we_chat_token' => 'xinjia2015xjc1',
    'we_chat_redirect_uri' => 'http://gx.xjc1.com/wx/oauth2',
	
	
	//管理员手机号
    'admin_mobile' => '15995716443',
	//匹配成功、成员退出、小组解散时是否发送手机提示短信
    'send_notice_msg' => false,

    //
    'webName' => '网站名称'
];
