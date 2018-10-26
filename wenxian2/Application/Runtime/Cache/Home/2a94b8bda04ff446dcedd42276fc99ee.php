<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meat name="viewport" content="width=device-width,initial-scale=2,maximum-scale=3,user-scalable=no">
	<title>温鲜私家厨房</title>
	<link rel="stylesheet" href="/wenxian2/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/wenxian2/Public/css/swiper.css">
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
	<script src="/wenxian2/Public/js/swiper.min.js"></script> 
	<style>
		.swiper-container-hidden {
			visibility: hidden;
			z-index: -1 !important;
			position: absolute !important;
			width: 1200px !important;
		}
		.sweiper-img-box{
			width: 160px !important;
			height: 200px !important;
			margin: 40px;
			overflow: hidden;
		}
		.sweiper-img{
			width: auto;
			height: 100%;
		}
		.swiper-button-next,
		.swiper-button-prev{
			margin-top: 7px !important;
			background-size: 20px !important;
			outline: none
		}
		.swiper-button-next{
			right: -2px !important;
		}
		.swiper-button-prev{
			left: -2px !important;
		}
		.colorRed{
			color: #e03344 !important;
			border-bottom: solid 2px #e03344 !important;
		}
	</style>
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
<section class="content-container" id="wenxian">
	<div class="nav-container width1200">
		<ul class="nav">
			<li><a href="javascript:void(0)">网站首页</a></li>
			<li><a href="/wenxian2/index.php/Home/Index/About">关于我们</a></li>
			<li><a href="/wenxian2/index.php/Home/Index/Information">美食资讯</a></li>
			<li>
				<a href="javascript:void(0)" class="logo-box">
					<img src="/wenxian2/Public/img/logo.jpg" alt="温鲜私家厨房LOGO">
				</a>
			</li>
			<li><a href="javascript:void(0)">菜单中心</a></li>
			<li><a href="javascript:void(0)">重要活动</a></li>
			<li><a href="javascript:void(0)">联系我们</a></li>
		</ul>
	</div>
	<div class="content-first-banner">
		<img src="/wenxian2/Public/img/1_05.jpg">
		<img src="/wenxian2/Public/img/1_06.jpg">
		<img src="/wenxian2/Public/img/1_07.jpg">
	</div>
	<div class="about-us width1200">
		<img src="/wenxian2/Public/img/1_10.png">
		<p>温鲜-私人厨房，隶属于合茂集团，位于北京市朝阳区高碑店镇西店通惠河南街1066号。餐厅可以同时容纳100多人用餐，其定位于“品味、生态、文化、尊贵”，抒发着浓厚的家乡情怀，散发着低调大气的文化品味。其与室内VIP接待室、古典茶室、红酒雪茄吧融为一体，又独具一格。作为高端会所的重要组成部分，“温鲜-私人厨房”为尊贵的客人提供室内静谧高雅、世外垂柳依依、荷塘月色的用餐空间，打造品尝温州美味、鉴赏尊贵品质、沉醉视觉盛宴、感受精彩无限的专属您的私人厨房。让游子回味乡愁，唤起儿时的记忆，让食客品尝美味，激发味蕾的嗅觉。</p>
		<div class="dashed"></div>
		<ul class="width1200 details-smal-list">
			<li>
				<img src="/wenxian2/Public/img/1_17.png">
				<p>选用天然食材，抒发着浓厚的家乡情怀，散发着低调大气的文化品位</p>
			</li>
			<li>
				<img src="/wenxian2/Public/img/1_14.png">
				<p>让游子回味乡愁，唤起儿时记忆，用心制作，打造高端会所</p>
			</li>
			<li>
				<img src="/wenxian2/Public/img/1_20.png">
				<p>为尊贵的客人提供室内静谧高雅、世外垂柳依依荷塘月色的用餐空间</p>
			</li>
		</ul>
		<div class="more-btn-box width1200">
			<a href="javascript:void(0)">企业文化</a>
		</div>
	</div>
	<div class="classic-gourmet-container">
		<div class="classic-gourmet">
			<img src="/wenxian2/Public/img/1_45.png">
			<div class="classic-gourmet-nav">
				<ul>
					<li v-for="(gourmet,index) in gourmetNav" @click="isShow=index;changeCon(index)" :class="{ colorRed:isRed == index}">{{ gourmet.gourmetTit }}</li>
				</ul>
			</div>
			<div class="classic-gourmet-banner">
				<div class="swiper-container" :class="{'swiper-container-hidden':isShow != 0}" id="swiper-1">
					<div class="swiper-wrapper">
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/1.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/2.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/3.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/4.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/5.jpg" title="图片信息">
						</div>
					</div>
					<div class="swiper-button-prev swiper-button-white swiper-button-prev-1"></div>
					<div class="swiper-button-next swiper-button-white swiper-button-next-1"></div>
				</div>
				<div class="swiper-container" :class="{'swiper-container-hidden':isShow != 1}" id="swiper-2">
					<div class="swiper-wrapper">
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/1.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/2.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/3.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/4.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/5.jpg" title="图片信息">
						</div>
					</div>
					<div class="swiper-button-prev swiper-button-white swiper-button-prev-2"></div>
					<div class="swiper-button-next swiper-button-white swiper-button-next-2"></div>
				</div>
				<div class="swiper-container" :class="{'swiper-container-hidden':isShow != 2}" id="swiper-3">
					<div class="swiper-wrapper">
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/1.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/2.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/3.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/4.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/5.jpg" title="图片信息">
						</div>
					</div>
					<div class="swiper-button-prev swiper-button-white swiper-button-prev-3"></div>
					<div class="swiper-button-next swiper-button-white swiper-button-next-3"></div>
				</div>
				<div class="swiper-container" :class="{'swiper-container-hidden':isShow != 3}" id="swiper-4">
					<div class="swiper-wrapper">
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/1.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/2.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/3.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/4.jpg" title="图片信息">
						</div>
						<div class="swiper-slide sweiper-img-box">
							<img class="sweiper-img" src="/wenxian2/Public/img/5.jpg" title="图片信息">
						</div>
					</div>
					<div class="swiper-button-prev swiper-button-white swiper-button-prev-4"></div>
					<div class="swiper-button-next swiper-button-white swiper-button-next-4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="importantActivities-container width1200">
		<img src="/wenxian2/Public/img/1_28_1.jpg">
		<ul class="width1200">
			<li>
				<div class="bg-layer">
					<p>合茂集团董事长与贝宁共和国大使会餐</p>
					<p>10-19</p>
					<div class="date-box">
						<p>2018</p>
						<p class="el-icon-arrow-right"></p>
					</div>
				</div>
				<img src="/wenxian2/Public/img/0059.jpg">
			</li>
			<li>
				<div class="bg-layer">
					<p>合茂集团董事长与贝宁共和国大使会餐</p>
					<p>10-19</p>
					<div class="date-box">
						<p>2018</p>
						<p class="el-icon-arrow-right"></p>
					</div>
				</div>
				<img src="/wenxian2/Public/img/0059.jpg">
			</li>
			<li>
				<div class="bg-layer">
					<p>合茂集团董事长与贝宁共和国大使会餐</p>
					<p>10-19</p>
					<div class="date-box">
						<p>2018</p>
						<p class="el-icon-arrow-right"></p>
					</div>
				</div>
				<img src="/wenxian2/Public/img/0059.jpg">
			</li>
		</ul>
		<div class="more-btn-box width1200">
			<a href="javascript:void(0)">查看更多</a>
		</div>
	</div>
</section>
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
var wenxian = new Vue({
  	el: '#wenxian',
  	data: {
  		gourmetNav: [
			{
				gourmetTit : '凉菜系列'
			},
			{
				gourmetTit : '热菜系列'
			},
			{
				gourmetTit : '甜点系列'
			},
			{
				gourmetTit : '饮品系列'
			}
		],
    	isShow: 0,
		isRed: -1,
		isHidden: 0
  	},
  	methods:{
		changeCon(index){
			this.isRed=index
		}
	}
})

var mySwiper = new Swiper ('#swiper-1', {
  	slidesPerView : 5,
  	slidesPerGroup : 5,
  	width: 1200,
    direction: 'horizontal', // 垂直切换选项
    loop: true, // 循环模式选项
    autoplay: true,
    observer:true,//修改swiper自己或子元素时，自动初始化swiper
	observeParents:true,//修改swiper的父元素时，自动初始化swiper
    navigation: {
      nextEl: '.swiper-button-next-1',
      prevEl: '.swiper-button-prev-1',
    }
})
var mySwiper = new Swiper ('#swiper-2', {
  	slidesPerView : 5,
  	slidesPerGroup : 5,
  	width: 1200,
    direction: 'horizontal', // 垂直切换选项
    loop: true, // 循环模式选项
    autoplay: true,
    observer:true,//修改swiper自己或子元素时，自动初始化swiper
	observeParents:true,//修改swiper的父元素时，自动初始化swiper
    navigation: {
      nextEl: '.swiper-button-next-2',
      prevEl: '.swiper-button-prev-2',
    }
})
var mySwiper = new Swiper ('#swiper-3', {
  	slidesPerView : 5,
  	slidesPerGroup : 5,
  	width: 1200,
    direction: 'horizontal', // 垂直切换选项
    loop: true, // 循环模式选项
    autoplay: true,
    observer:true,//修改swiper自己或子元素时，自动初始化swiper
	observeParents:true,//修改swiper的父元素时，自动初始化swiper
    navigation: {
      nextEl: '.swiper-button-next-3',
      prevEl: '.swiper-button-prev-3',
    }
})
var mySwiper = new Swiper ('#swiper-4', {
  	slidesPerView : 5,
  	slidesPerGroup : 5,
  	width: 1200,
    direction: 'horizontal', // 垂直切换选项
    loop: true, // 循环模式选项
    autoplay: true,
    observer:true,//修改swiper自己或子元素时，自动初始化swiper
	observeParents:true,//修改swiper的父元素时，自动初始化swiper
    navigation: {
      nextEl: '.swiper-button-next-4',
      prevEl: '.swiper-button-prev-4',
    }
})
</script>
</body>
</html>