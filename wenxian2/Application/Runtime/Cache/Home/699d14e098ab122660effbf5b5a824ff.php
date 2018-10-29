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
	<div id="activities">
		<div class="about-content-container width1200">
			<el-breadcrumb separator-class="el-icon-arrow-right">
				<el-breadcrumb-item>您的位置：</el-breadcrumb-item>
				<el-breadcrumb-item :to="{ path: '/' }"><a href="index.html">首页</a></el-breadcrumb-item>
				<el-breadcrumb-item :to="{ path: '/information' }">重要活动</el-breadcrumb-item>
			</el-breadcrumb>
		</div>
		<div class="information-title-box">
			<img src="/wenxian2/Public/img/1_28_1.jpg">
		</div>
		<div class="menu-small-nav">
			<a href="javascript:void(0)">全部</a>
			<a href="javascript:void(0)">宴请活动</a>
		</div>
		<div class="importantActivities-container width1200">
			<ul class="width1200" id="importantActivities-view">
				<li v-for="active in activities">
					<div class="bg-layer">
						<p>合茂集团董事长与贝宁共和国大使会餐</p>
						<p>10-19</p>
						<div class="date-box">
							<p>2018</p>
							<p class="el-icon-arrow-right"></p>
						</div>
					</div>
					<img :src="active.activeItemsImg">
				</li>
			</ul>
			<ul class="width1200" id="importantActivities-view">
				<li v-for="active in activities">
					<div class="bg-layer">
						<p>合茂集团董事长与贝宁共和国大使会餐</p>
						<p>10-19</p>
						<div class="date-box">
							<p>2018</p>
							<p class="el-icon-arrow-right"></p>
						</div>
					</div>
					<img :src="active.activeItemsImg">
				</li>
			</ul>
		</div>
		<!-- 分页 -->
		<div class="block">
			<el-pagination
			prev-text="上一页"
			next-text="下一页"
			@size-change="handleSizeChange"
			@current-change="currentChange"
			@prev-click="prevClick"
			@next-click="nextClick"
			:page-size="12"
			layout="prev, pager, next"
			:total="1000">
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
new Vue({
	el: '#activities',
	data() {
		return {
			activities: [
				{
					activeItemsImg : '/wenxian2/Public/img/0059.jpg'
				}, {
					activeItemsImg : '/wenxian2/Public/img/0059.jpg'
				}, {
					activeItemsImg : '/wenxian2/Public/img/0059.jpg'
				}
			],
		}
	},
	methods: {
		handleSizeChange(val) {
			this.pagesize = val;
		},
		currentChange(current) {
			this.pagesize = current;
			console.log(current)
		},
		prevClick(prev) {
			// console.log(prev)
		},
		nextClick(next) {
			// console.log(next)
		}
	}
})
</script>
</body>
</html>