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
	<div class="details-container" id="menu-details">
		<div class="details-left-content">
			<div class="about-content-container width1200">
				<el-breadcrumb separator-class="el-icon-arrow-right">
					<el-breadcrumb-item>您的位置：</el-breadcrumb-item>
					<el-breadcrumb-item><a href="/wenxian2/index.php/Home/Index/index">首页</a></el-breadcrumb-item>
					<el-breadcrumb-item><a href="/wenxian2/index.php/Home/Index/menu">菜单中心</a></el-breadcrumb-item>
					<el-breadcrumb-item>白萝卜</el-breadcrumb-item>
				</el-breadcrumb>
			</div>
			<div class="details-big-img-box">
				<img src="/wenxian2/Public/img/details-big-img.jpg">
			</div>
		</div>
		<div class="details-right-content">
			<div class="text-content">
				<h3>白萝卜</h3>
				<p class="introduction-of-dishes" >白萝卜含有多种微量元素，可增强机体免疫力，抑制癌细胞的生长。有助于体内废物的排除。</p>
				<hr>
				<div class="menu-small-nav">
					<a>推荐菜品</a>
				</div>
				<ul class="recommend-menu">
					<recommend-list v-for="(recommend,index) in menus" v-if="index < 6" :recommend="recommend"></recommend-list>
				</ul>
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
	Vue.component('recommend-list',{
	props:[
		'recommend'
	],
	template:   `<li>
					<a href="/wenxian2/index.php/Home/Index/menu-details">
						<div>
							<img :src='recommend.imgs'>
						</div>
						<p>{{ recommend.tag }}</p>
					</a>
				</li>`
	})
	new Vue({
		el: '#menu-details',
		data: {
			menus: [],
			lists : [
				{
					imgs : '/wenxian2/Public/img/menu-item-img.jpg',
					tag : '凉拌海蜇1'
				},{
					imgs : '/wenxian2/Public/img/menu-item-img.jpg',
					tag : '凉拌海蜇2'
				},{
					imgs : '/wenxian2/Public/img/menu-item-img.jpg',
					tag : '凉拌海蜇3'
				},{
					imgs : '/wenxian2/Public/img/menu-item-img.jpg',
					tag : '凉拌海蜇4'
				},{
					imgs : '/wenxian2/Public/img/menu-item-img.jpg',
					tag : '凉拌海蜇5'
				},{
					imgs : '/wenxian2/Public/img/menu-item-img.jpg',
					tag : '凉拌海蜇6'
				}
			]
		},
		created(val) {
			const { lists } = this
			const arr = lists.slice((val-1)*12,12)
			this.menus = arr
		}
	})
</script>