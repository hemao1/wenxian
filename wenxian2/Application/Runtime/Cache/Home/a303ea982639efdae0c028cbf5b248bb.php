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
	<div id="menu">
		<div class="about-content-container width1200">
			<el-breadcrumb separator-class="el-icon-arrow-right">
				<el-breadcrumb-item>您的位置：</el-breadcrumb-item>
				<el-breadcrumb-item><a href="/wenxian2/index.php/Home/Index/index">首页</a></el-breadcrumb-item>
				<el-breadcrumb-item>菜单中心</el-breadcrumb-item>
			</el-breadcrumb>
		</div>
		<div class="information-title-box">
			<img src="/wenxian2/Public/img/menu.png">
		</div>
		<div class="menu-small-nav">
			<a href="javascript:void(0)">全部</a>
			<a href="javascript:void(0)">推荐菜品</a>
		</div>
		<div class="menu-content-box width1200">
			<ul>
				<menu-list v-for="(menu,index) in menus" v-if="index < 12" :menu="menu"></menu-list>
			</ul>
		</div>
		<!-- 分页 -->
		<div class="block">
			<el-pagination
			prev-text="上一页"
			next-text="下一页"
			@current-change="currentChange"
			:page-size="12"
			layout="prev, pager, next"
			:total="20">
			</el-pagination>
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
Vue.component('menu-list',{
	props:[
		'menu'
	],
	template:   `<li>
					<a href="/wenxian2/index.php/Home/Index/menu-details">
						<div>
							<img :src='menu.imgs'>
						</div>
						<p>{{ menu.tag }}</p>
					</a>
				</li>`
})
new Vue({
	el: '#menu',
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
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇7'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇8'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇9'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇10'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇11'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇12'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇13'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇14'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇15'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇16'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇17'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇18'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇19'
			},{
				imgs : '/wenxian2/Public/img/menu-item-img.jpg',
				tag : '凉拌海蜇20'
			}
		]
	},
	created(val) {
		const { lists } = this
		const arr = lists.slice((val-1)*12,12)
		this.menus = arr
	},
	methods: {
		currentChange(current) {
			const { lists } = this
			const arr = lists.slice((current-1)*12,current*12)
			this.menus = arr
		}
	}
})
</script>
</body>
</html>