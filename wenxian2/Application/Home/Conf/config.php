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
		    //美食资讯
		    'duotiao/xiaoxi' => 'Index/duotiao',
		     //美食资讯详情
		    'xiangqing/:id\d' => 'Index/xiangqing',
		     //app接口
		    'dantiao/xinxi' => 'Index/dantiao',
		     //首页类型
		    'leixing/xinxi' => 'Index/leixing',
		     //首页类型菜品图片地址
		    'leixing/:type_id\d' => 'Index/lunbo',
		     //菜单中心
		    'memu/xinxi' => 'Index/memu',
		     //推荐菜品
		    'memuhots/xinxi' => 'Index/memuhots',
		     //推荐菜品详情
		    'memuxiang/:id\d' => 'Index/memuxiang',
		    //重要活动标题接口
		    'activity/xinxi' => 'Index/huodong',
		    //重要活动详情接口
		    'activityxiang/:id\d/:token' => 'Index/huodongxiang',
		    //宴请活动接口
		    'yanqing/xinxi' => 'Index/yanqing',
		    //验证token
		    'yanzheng/:id\d/:token' => 'Index/yanzheng',

		    /* ---------------------------------------  */

		    //轮播图
		    'lunbo/xinxi' => 'Base/index',
		    //每日推荐
		    'jingdian/xinxi' =>'Duotiao/tuijian',
		    //温鲜经典
		    'wenxian/xinxi'=>'Duotiao/jingdian',
		   
	),

	'TMPL_CACHE_ON' => false,//禁止模板编译缓存 
	'HTML_CACHE_ON' => false,//禁止静态缓存 

);