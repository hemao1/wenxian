<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meat name="viewport" content="width=device-width,initial-scale=2,maximum-scale=3,user-scalable=no">
	<title>温鲜私家厨房</title>
	<link rel="stylesheet" href="/wenxian2/Public/css/style.css">
	<link rel="stylesheet" href="/wenxian2/Public/css/swiper.css">
	<link rel="stylesheet" href="/wenxian2/Public/css/element-ui.css">
	<script src="/wenxian2/Public/js/vue.js"></script>
	<script src="/wenxian2/Public/js/swiper.min.js"></script>
	<script src="/wenxian2/Public/js/element-ui.js"></script>
	<script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
<header>
	<div class="header-container width1200">
		<p>欢迎来到温鲜私家厨房</p>
		<p>
			预订热线：<a class="tel" href="javascript:void(0)">010-65288743</a>
		</p>
	</div>
</header>
<section class="content-container">
	<div class="nav-container width1200">
		<ul class="nav">
			<li><a href="/wenxian2/index.php/Home/Index/index">网站首页</a></li>
			<li><a href="/wenxian2/index.php/Home/Index/About">关于我们</a></li>
			<li><a href="/wenxian2/index.php/Home/Index/Information">美食资讯</a></li>
			<li>
				<a href="/wenxian2/index.php/Home/Index/index" class="logo-box">
					<img src="/wenxian2/Public/img/logo.jpg" alt="温鲜私家厨房LOGO">
				</a>
			</li>
			<li><a href="/wenxian2/index.php/Home/Index/menu">菜单中心</a></li>
			<li><a href="/wenxian2/index.php/Home/Index/activities">重要活动</a></li>
			<li><a href="/wenxian2/index.php/Home/Index/contactUs">联系我们</a></li>
		</ul>
	</div>
	<div class="details-container" id="information-details">
		<div class="details-left-content">
			<div class="about-content-container width1200">
				<el-breadcrumb separator-class="el-icon-arrow-right">
					<el-breadcrumb-item>您的位置：</el-breadcrumb-item>
					<el-breadcrumb-item><a href="/wenxian2/index.php/Home/Index/index">首页</a></el-breadcrumb-item>
					<el-breadcrumb-item><a href="/wenxian2/index.php/Home/Index/information">美食资讯</a></el-breadcrumb-item>
					<el-breadcrumb-item>红烧螃蟹</el-breadcrumb-item>
				</el-breadcrumb>
			</div>
			<div class="details-big-img-box">
				<img src="/wenxian2/Public/img/details-big-img.jpg">
			</div>
		</div>
		<div class="details-right-content">
			<div class="text-content" v-for="(content,index) in contents">
				<h3>{{ content.title }}</h3>
				<h4>制作原料</h4>
				<p>{{ content.yuanliao }}</p>
				<h4>制作步骤</h4>
				<p>{{ content.xiangqing }}</p>
			</div>
		</div>
	</div>
<footer>
	<div class="footer-container width1200">
		<div>
			<img src="/wenxian2/Public/img/1_44.png">
		</div>
		<div>1999-2018 合茂集团股份有限公司 浙ICP备14024595号</div>
		<div>联系我们</div>
		<div>
			<img src="/wenxian2/Public/img/QR.jpg">
		</div>
	</div>
</footer>
<script>
	new Vue({
		el: '#information-details',
		data: {
			contents : []
		},
		created(val) {
			let str = location.href; //取得整个地址栏
			let num = str.indexOf("=");
			let id = str.substr(num + 1); //取得所有参数
			let idArr = 'http://47.92.37.138/index.php/Home/xiangqing/' + id;
			console.log(idArr);
			let self = this
			$.ajax({
				url: idArr,
				type: 'GET',
				dataType: 'JSONP',
				success: function(res) {
					let resLength = res.data.length
					for(let i=0;i<resLength;i++){
						self.contents.push(res.data[i]);
					}
					self.contents = res.data
					console.log(JSON.stringify(res.data,null,4))
				}
			})
		}
	})
</script>