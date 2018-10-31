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
	<div id="information">
		<div class="about-content-container width1200">
			<el-breadcrumb separator-class="el-icon-arrow-right">
				<el-breadcrumb-item>您的位置：</el-breadcrumb-item>
				<el-breadcrumb-item><a href="/wenxian2/index.php/Home/Index/index">首页</a></el-breadcrumb-item>
				<el-breadcrumb-item>美食资讯</el-breadcrumb-item>
			</el-breadcrumb>
		</div>
		<div class="information-title-box">
			<img src="/wenxian2/Public/img/information-title.png">
		</div>
		<div class="information-list-container width1200">
			<div class="information-list-box" v-for="(informationItem,index) in informationItems" v-if='index < 6' :key="index">
					<div class="imgs">
						<img :src="'/wenxian2/Public/img/' + informationItem.imgs">
					</div>
					<div class="contents">
						<h4>{{ informationItem.title }}</h4>
						<p class="content-text">{{ informationItem.content }}</p>
						<p class="information-date">{{ informationItem.time }}</p>
						<div class="more-btn-box information-detail-btn width1200">
							<a :href="'/wenxian2/index.php/Home/Index/information-details?id=' + informationItem.id">查看详情</a>
						</div>
					</div>
				</div>
		</div>
		<!-- 分页 -->
		<div class="block">
		  	<el-pagination
		  		prev-text="上一页"
				next-text="下一页"
		  		@current-change='currentChange'
		    	layout="prev, pager, next"
				:page-size="6"
		    	:total="10">
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
		el: '#information',
		data: {
			informationItems:[]
		},
		created(val) {
			let self = this
			$.ajax({
				url: 'http://47.92.37.138/index.php/Home/duotiao/xiaoxi',
				type: 'GET',
				dataType: 'JSONP',
				success: function(res) {
					let resLength = res.data.length
					for(let i=0;i<resLength;i++){
						self.informationItems.push(res.data[i]);
					}
				}
			})
		},
		methods: {
			currentChange(current) {
				let self = this
				$.ajax({
					url: 'http://47.92.37.138/index.php/Home/duotiao/xiaoxi',
					type: 'GET',
					dataType: 'JSONP',
					success: function(res) {
						let resLength = res.data.length
						for(let i=0;i<resLength;i++){
							self.informationItems.push(res.data[i]);
						}
						const arr = res.data.slice((current-1)*6,current*6)
						self.informationItems=arr
					}
				})
			}
		}
	})
</script>
</body>
</html>