<?php
return array(
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'hemao', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集

	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则 
		
			//单条消息
			 'dantiao/:id\d'   => 'Index/add',
		    //多条消息
		    'duotiao/xiaoxi' => 'Index/duotiao',
		    'dantiao/xinxi' => 'Index/dantiao',
		    
	),

	'TMPL_CACHE_ON' => false,//禁止模板编译缓存 
	'HTML_CACHE_ON' => false,//禁止静态缓存 

);