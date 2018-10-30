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
	<div id="information">
		<div class="about-content-container width1200">
			<el-breadcrumb separator-class="el-icon-arrow-right">
				<el-breadcrumb-item>您的位置：</el-breadcrumb-item>
				<el-breadcrumb-item><a href="index">首页</a></el-breadcrumb-item>
				<el-breadcrumb-item>美食资讯</el-breadcrumb-item>
			</el-breadcrumb>
		</div>
		<div class="information-title-box">
			<img src="/wenxian2/Public/img/information-title.png">
		</div>
		<div class="information-list-container width1200">
			<information-list-comp v-for="(informationItem,index) in informationItems" v-if='index < 6' :infor="informationItem" :key="index"></information-list-comp>
		</div>
		<!-- 分页 -->
		<div class="block">
		  	<el-pagination
		  		prev-text="上一页"
				next-text="下一页"
		  		@current-change='currentChange'
		    	layout="prev, pager, next"
				:page-size="6"
		    	:total="16">
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
	Vue.component('information-list-comp',{
		props: [
			'infor'
		],
		template:   `<div class="information-list-box">
						<div class="imgs">
							<img :src="infor.imgs">
						</div>
						<div class="contents">
							<h4>{{ infor.tit }}</h4>
							<p class="content-text">{{ infor.text }}</p>
							<p class="information-date">{{ infor.date }}</p>
							<div class="more-btn-box information-detail-btn width1200">
								<a :href="infor.href">查看详情</a>
							</div>
						</div>
					</div>`
	})
	new Vue({
		el: '#information',
		data: {
			informationItems:[],
			lists:[
				{
					imgs : '/wenxian2/Public/img/information-img-1.jpg',
					tit : '红烧螃蟹1',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-1.jpg',
					tit : '红烧螃蟹2',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-1.jpg',
					tit : '红烧螃蟹3',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-1.jpg',
					tit : '红烧螃蟹4',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-5.jpg',
					tit : '红烧螃蟹5',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-6.jpg',
					tit : '红烧螃蟹6',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-1.jpg',
					tit : '红烧螃蟹7',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-2.jpg',
					tit : '红烧螃蟹8',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-3.jpg',
					tit : '红烧螃蟹9',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-4.jpg',
					tit : '红烧螃蟹10',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-5.jpg',
					tit : '红烧螃蟹11',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-5.jpg',
					tit : '红烧螃蟹12',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-5.jpg',
					tit : '红烧螃蟹13',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-5.jpg',
					tit : '红烧螃蟹14',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-5.jpg',
					tit : '红烧螃蟹15',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				},{
					imgs : '/wenxian2/Public/img/information-img-5.jpg',
					tit : '红烧螃蟹16',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'information-details'
				}
			]
		},
		created(val) {
			const { lists } = this
			const arr = lists.slice((val-1)*6,6)
			this.informationItems = arr
		},
		methods: {
			currentChange(current) {
				const { lists } = this
				const arr = lists.slice((current-1)*6,current*6)
				this.informationItems = arr
				console.log(JSON.stringify(arr,null,2))
			}
		}
	})
</script>
</body>
</html>