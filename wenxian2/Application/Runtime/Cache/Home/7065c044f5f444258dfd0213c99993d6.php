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
			<div class="text-content">
				<h3>红烧螃蟹</h3>
				<h4>制作原料</h4>
				<p>螃蟹4个，盐、糖、油、葱、姜、香菜、切面各少许。</p>
				<h4>制作步骤</h4>
				<p>1、把螃蟹腹部的脐盖打开，把里面的东西用力挤干净，用刷子把蟹洗干净后，用刀一开为二。切面朝上放在小盆里备用。
				<br/>	
				2、锅里倒点油，烧热后把姜片爆香，然后加进4碗水，放盐和一点点糖，大火烧开后，逐块放进切好的蟹块，要先把蟹的切面放进汤里烫一下再整块放进汤里（这样可以保留多点蟹汁），加洋葱，然后合上盖煮15分钟左右。起锅前加入葱花和香菜末就可出锅了。</p>
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

		}
	})
</script>