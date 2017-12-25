<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"> 
		<title>99新房网_品质好房</title>
		<script type="text/javascript" src="/Public/mobile/js/yidong.js"></script>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/mobile/css/shaixuan.css"/>
	</head>
	<body>
		<div id="head">
			<div id="head-quyu">
				<span id="quyu-text">上海周边</span>
				<span id="quyu-arrow"><img src="/Public/mobile/img/tubiao/quyu-arrow.png" alt="" /></span>
			</div>
			<ul id="sousuo-menu">
				<li class="sousuo-city">上海周边</li>
				<!-- <li class="sousuo-city">北京周边</li>
				<li class="sousuo-city">东戴河区域</li> -->
			</ul>
			<img class="head-img" src="/Public/mobile/img/banner/index.jpg" alt="" />
			<form id="head-sousuo" action="/mobile.php/search/search" method="get">
				<input type="text" name="guanjianzi" id="" value="" placeholder="输入小区或区域开始找房"/>
				<div class="hs-span">
					<span><img src="/Public/mobile/img/tubiao/sousuo-02.png"/></span>
					搜索
				</div>
				<input type="submit" value=""/>
			</form>
		</div>
		<!--顶部定位搜索-->
		<div id="sousuo-top">
			<form class="search"  action="/mobile.php/search/search" method="get">
				<input type="text" name="guanjianzi" class="search-text" placeholder="输入楼盘名称开始找房" value="" />
				<div class="search-span"><span><img src="/Public/mobile/img/tubiao/sousuo-02.png" alt="" /></span>搜索</div>
				<input type="submit" name="" class="search-submit" value="搜索" />
			</form>
			<!-- <a id="sousuo-link" href="sousuo.html"></a> -->
		</div>
		<!--导航-->
		<div id="nav" class="box-width">
			<a class="nav-tol" href="/mobile.php/show/index">
				<div class="nav-img"><img src="/Public/mobile/img/tubiao/nav-01.png" alt="" /></div>
				<div class="nav-title">专车看房</div>
			</a>
			<a class="nav-tol" href="/mobile.php/find/index">
				<div class="nav-img"><img src="/Public/mobile/img/tubiao/nav-02.png" alt="" /></div>
				<div class="nav-title">帮你找房</div>
			</a>
			<a class="nav-tol" href="/mobile.php/search/index">
				<div class="nav-img"><img src="/Public/mobile/img/tubiao/nav-03.png" alt="" /></div>
				<div class="nav-title">楼盘查询</div>
			</a>
			<a href="/mobile.php/calculator/calculator">
				<div class="nav-img"><img src="/Public/mobile/img/tubiao/nav-04.png" alt="" /></div>
				<div class="nav-title">房贷计算器</div>
			</a>
		</div>
		<div class="jiange"></div>
		<!--房产资讯-->
		<div id="news" class="box-width">
			<div class="news-head">
				<a class="news-tubiao" href="/mobile.php/news/news"><img src="/Public/mobile/img/tubiao/news-tubiao.png"/></a>
				<div class="news-hot">
					<a class="textoverflow" href="/mobile.php/news/news">建筑容积率计算公式以及建筑容积率计算公式：容积率=总建筑面</a>
					<span id="news-time">昨天 19：05</span>
					<a class="textoverflow" href="/mobile.php/news/news">建筑容积率计算公式：容积率=总建筑面建筑容积率计算公式：容积率=总建筑面</a>
				</div>
			</div>
		</div>
		<div class="box-width">
			<a class="news-list" href="/mobile.php/news/news">
				<div class="news-img"><img src="/Public/mobile/img/news-img1.png" alt="" /></div>
				<div class="news-body">
					<p class="news-title textoverflow">经济适用房</p>
					<p class="news-text textoverflow">选房技巧有哪些?</p>
				</div>
			</a>
			<a class="news-list" href="/mobile.php/news/news">
				<div class="news-img"><img src="/Public/mobile/img/news-img2.png" alt="" /></div>
				<div class="news-body">
					<p class="news-title textoverflow">样板间有猫腻 </p>
					<p class="news-text textoverflow">四招教你如何识破！</p>
				</div>
			</a>
			<div class="news-xian"></div>
			<a class="news-list" href="/mobile.php/news/news">
				<div class="news-img"><img src="/Public/mobile/img/news-img3.png" alt="" /></div>
				<div class="news-body">
					<p class="news-title textoverflow">中央要降房价</p>
					<p class="news-text textoverflow">这些因素正在阻止正在阻因素</p>
				</div>
			</a>
			<a class="news-list" href="/mobile.php/news/news">
				<div class="news-img"><img src="/Public/mobile/img/news-img4.png" alt="" /></div>
				<div class="news-body">
					<p class="news-title textoverflow">房价的本质</p>
					<p class="news-text textoverflow">经济不萧条，房价.经济不萧条，</p>
				</div>
			</a>
		</div>
		<div class="jiange"></div>
		<!--为您优选-->
		<div class="title">为您优选</div>
		<div class="swiper-container" id="tag">
	        <div class="swiper-wrapper">
	            <a class="swiper-slide" href="/mobile.php/search/index?lx=1">
	            	<div class="tag-img"><img src="/Public/mobile/img/hot.png" alt="" /></div>
	            	<div class="tag-title">小户型</div>
	            	<div class="tag-text">刚需安家首选</div>
	            	<div class="tag-link">查看详情</div>
	            </a>
	            <a class="swiper-slide" href="/mobile.php/search/index?lx=1">
	            	<div class="tag-img"><img src="/Public/mobile/img/hot.png" alt="" /></div>
	            	<div class="tag-title">现房</div>
	            	<div class="tag-text">随时拎包入住</div>
	            	<div class="tag-link">查看详情</div>
	            </a>
	            <a class="swiper-slide" href="/mobile.php/search/index?lx=1">
	            	<div class="tag-img"><img src="/Public/mobile/img/hot.png" alt="" /></div>
	            	<div class="tag-title">公寓</div>
	            	<div class="tag-text">刚需安家首选</div>
	            	<div class="tag-link">查看详情</div>
	            </a>
	             <!-- <a class="swiper-slide" href="search.html">
	            	<div class="tag-img"><img src="/Public/mobile/img/hot.png" alt="" /></div>
	            	<div class="tag-title">商铺</div>
	            	<div class="tag-text">随时拎包入住</div>
	            	<div class="tag-link">查看详情</div>
	            </a> -->
	        </div>
		</div>
		<h1></h1>
		<!--热门楼盘推荐-->
		<!-- <div class="title">热门新盘推荐</div>
		<div class="box-width">
			<a class="hot-list" href="loupan.html">
				<div class="hot-img">
					<img src="/Public/mobile/img/hot.png" alt="" />
					<span class="tag-jiege">1100元/㎡</span>
				</div>
				<div class="loupan-name">绿地长岛</div>
				<span class="zongjia">¥134万起</span>
				<div class="loupan-xinxi">88-124㎡ | 2-3室</div>
				<div class="loupan-xinxi">启东市 | 启东</div>
				<ul class="loupan-tag">
					<li>装修交付</li>
					<li>不限购</li>
					<li>全明户型</li>
				</ul>
				<div class="hot-bottom">“区域热门楼盘”</div>
			</a>
			<a class="hot-list" href="loupan.html">
				<div class="hot-img">
					<img src="/Public/mobile/img/hot.png" alt="" />
					<span class="tag-jiege">1100元/㎡</span>
				</div>
				<div class="loupan-name">绿地长岛</div>
				<span class="zongjia">¥134万起</span>
				<div class="loupan-xinxi">88-124㎡ | 2-3室</div>
				<div class="loupan-xinxi">启东市 | 启东</div>
				<ul class="loupan-tag">
					<li>装修交付</li>
					<li>不限购</li>
					<li>全明户型</li>
				</ul>
				<div class="hot-bottom">“区域热门楼盘”</div>
			</a>
			<a class="hot-list" href="loupan.html">
				<div class="hot-img">
					<img src="/Public/mobile/img/hot.png" alt="" />
					<span class="tag-jiege">1100元/㎡</span>
				</div>
				<div class="loupan-name">绿地长岛</div>
				<span class="zongjia">¥134万起</span>
				<div class="loupan-xinxi">88-124㎡ | 2-3室</div>
				<div class="loupan-xinxi">启东市 | 启东</div>
				<ul class="loupan-tag">
					<li>装修交付</li>
					<li>不限购</li>
					<li>全明户型</li>
				</ul>
				<div class="hot-bottom">“区域热门楼盘”</div>
			</a>
			<a class="hot-list" href="loupan.html">
				<div class="hot-img">
					<img src="/Public/mobile/img/hot.png" alt="" />
					<span class="tag-jiege">1100元/㎡</span>
				</div>
				<div class="loupan-name">绿地长岛</div>
				<span class="zongjia">¥134万起</span>
				<div class="loupan-xinxi">88-124㎡ | 2-3室</div>
				<div class="loupan-xinxi">启东市 | 启东</div>
				<ul class="loupan-tag">
					<li>装修交付</li>
					<li>不限购</li>
					<li>全明户型</li>
				</ul>
				<div class="hot-bottom">“区域热门楼盘”</div>
			</a>
		</div> -->
		<div class="jiange"></div>
		<ul id="shaixuan">
			<li class="shaixuan-navs">区域<span class="shaixuan-arrow"><img src="/Public/mobile/img/tubiao/xiala.png" alt="" /></span></li>
			<li class="shaixuan-navs">总价<span class="shaixuan-arrow"><img src="/Public/mobile/img/tubiao/xiala.png" alt="" /></span></li>
			<li class="shaixuan-navs">户型<span class="shaixuan-arrow"><img src="/Public/mobile/img/tubiao/xiala.png" alt="" /></span></li>
			<li class="shaixuan-navs">更多<span class="shaixuan-arrow"><img src="/Public/mobile/img/tubiao/xiala.png" alt="" /></span></li>
		</ul>
		<!--楼盘筛选窗口定位-->
		<div id="shaixuan-fixed">
			<div id="shaixuan-back">
				
			</div>
			<ul id="shaixuan-box">
				<li class="shaixuan-nav">区域<span class="shaixuan-arrow"><img src="/Public/mobile/img/tubiao/xiala.png" alt="" /></span></li>
				<li class="shaixuan-nav">总价<span class="shaixuan-arrow"><img src="/Public/mobile/img/tubiao/xiala.png" alt="" /></span></li>
				<li class="shaixuan-nav">户型<span class="shaixuan-arrow"><img src="/Public/mobile/img/tubiao/xiala.png" alt="" /></span></li>
				<li class="shaixuan-nav">更多<span class="shaixuan-arrow"><img src="/Public/mobile/img/tubiao/xiala.png" alt="" /></span></li>
				<!--区域-->
				<div class="shaixuan-list">
					<div class="sxlist-top"><!--<img src="/Public/mobile/img/tubiao/shanxuan-top.png" alt="" />--></div>
					<div class="sxlist-title">
						<div class="sxlist-tag">区域</div>
					</div>
					<div class="sxlist-shi">
						<div class="sxlist-tag">湖州</div>
						<div class="sxlist-tag">海宁</div>
						<div class="sxlist-tag">海盐</div>
						<div class="sxlist-tag">嘉善</div>
						<div class="sxlist-tag">南湖</div>
						<div class="sxlist-tag">平湖</div>
						<div class="sxlist-tag">桐乡</div>
						<div class="sxlist-tag">秀洲</div>
						<div class="sxlist-tag">宁波</div>
						<div class="sxlist-tag">南通</div>
					</div>
					<!--<div class="sxlist-shi">
						<div class="sxlist-tag">不限</div>
						<div class="sxlist-tag">嘉兴</div>
						<div class="sxlist-tag">无锡</div>
						<div class="sxlist-tag">宁波</div>
						<div class="sxlist-tag">南通</div>
						<div class="sxlist-tag">苏州</div>
					</div>-->
					<!--县市列表-->
					<!--<div class="sxlist-xian">
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">秀洲区</div>
							<div class="sxlist-tag">南湖区</div>
							<div class="sxlist-tag">嘉善县</div>
							<div class="sxlist-tag">平湖市</div>
							<div class="sxlist-tag">海盐县</div>
							<div class="sxlist-tag">海宁市</div>
							<div class="sxlist-tag">桐乡市</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">梁溪区</div>
							<div class="sxlist-tag">滨湖区</div>
							<div class="sxlist-tag">惠山区</div>
							<div class="sxlist-tag">锡山区</div>
							<div class="sxlist-tag">新吴区</div>
							<div class="sxlist-tag">江阴市</div>
							<div class="sxlist-tag">宜兴市</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">海曙区</div>
							<div class="sxlist-tag">江北区</div>
							<div class="sxlist-tag">北仑区</div>
							<div class="sxlist-tag">镇海区</div>
							<div class="sxlist-tag">鄞州区</div>
							<div class="sxlist-tag">奉化区</div>
							<div class="sxlist-tag">余姚市</div>
							<div class="sxlist-tag">慈溪市</div>
							<div class="sxlist-tag">象山县</div>
							<div class="sxlist-tag">宁海县</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">崇川区</div>
							<div class="sxlist-tag">港闸区</div>
							<div class="sxlist-tag">通州区</div>
							<div class="sxlist-tag">海安县</div>
							<div class="sxlist-tag">如皋市</div>
							<div class="sxlist-tag">如东县</div>
							<div class="sxlist-tag">海门市</div>
							<div class="sxlist-tag">启东市</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">姑苏区</div>
							<div class="sxlist-tag">相城区</div>
							<div class="sxlist-tag">吴中区</div>
							<div class="sxlist-tag">虎丘区</div>
							<div class="sxlist-tag">吴江区</div>
							<div class="sxlist-tag">常熟市</div>
							<div class="sxlist-tag">昆山市</div>
							<div class="sxlist-tag">张家港市</div>
							<div class="sxlist-tag">太仓市</div>
						</ul>
						
					</div>-->
				</div>
				<!--总价-->
				<div class="shaixuan-list">
					<div class="sxlist-top"><!--<img src="/Public/mobile/img/tubiao/shanxuan-top.png" alt="" />--></div>
					<div class="sxlist-jiage">
						<div class="sxlist-tag">单价</div>
						<div class="sxlist-tag">总价</div>
					</div>
					<div class="sxlist-danjia">
						<div class="sxlist-tag">不限</div>
						<div class="sxlist-tag">6000元/㎡以下</div>
						<div class="sxlist-tag">6000-8000元/㎡</div>
						<div class="sxlist-tag">8000-10000元/㎡</div>
						<div class="sxlist-tag">10000-12000元/㎡</div>
						<div class="sxlist-tag">12000-14000元/㎡</div>
						<div class="sxlist-tag">14000-16000元/㎡</div>
						<div class="sxlist-tag">16000元/㎡以上</div>
					</div>
					<div class="sxlist-danjia">
						<div class="sxlist-tag">不限</div>
						<div class="sxlist-tag">60万以下</div>
						<div class="sxlist-tag">60万-70万</div>
						<div class="sxlist-tag">70万-80万</div>
						<div class="sxlist-tag">80万-90万</div>
						<div class="sxlist-tag">90万-100万</div>
						<div class="sxlist-tag">100万以上</div>
					</div>
					<form id="sxlist-dingyi" action="" >
						<span>自定义价格：</span>
						<input type="text" id="" value="" placeholder="最小"/>
						<span>—</span>
						<input type="text" id="" value="" placeholder="最大"/>
						<div class="dingyi-queding">确定</div>
						<input type="submit" id="dingyi-submit" value="确定"/>
					</form>
				</div>
				<!--户型-->
				<div class="shaixuan-list">
					<div class="sxlist-top"><!--<img src="/Public/mobile/img/tubiao/shanxuan-top.png" alt="" />--></div>
					<div class="box-width">
					 	<div class="sxlist-huxing">不限</div>
					 	<div class="sxlist-huxing">一居</div>
					 	<div class="sxlist-huxing">二居</div>
					 	<div class="sxlist-huxing">三居</div>
					 	<div class="sxlist-huxing">四居</div>
					 	<div class="sxlist-huxing">五居以上</div>
					</div>
				</div>
				<!--更多-->
				<form class="shaixuan-list">
					<div class="sxlist-top"><!--<img src="/Public/mobile/img/tubiao/shanxuan-top.png" alt="" />--></div>
					<div class="tag-box">
						<div class="gengduo-title">住房类型</div>
						<div class="zhaofang-tag">住宅<input type="radio" name="zhufang" value="住宅"/></div>
						<div class="zhaofang-tag">洋房<input type="radio" name="zhufang" value="洋房"/></div>
						<div class="zhaofang-tag">商业<input type="radio" name="zhufang" value="商业"/></div>
					</div>
					<div class="tag-box">
						<div class="gengduo-title">销售状态</div>
						<div class="zhaofang-tag">现房<input type="radio" name="xiaoshou" value="现房"/></div>
						<div class="zhaofang-tag">待售<input type="radio" name="xiaoshou" value="待售"/></div>
					</div>
					<div class="tag-box">
						<div class="gengduo-title">装修情况</div>
						<div class="zhaofang-tag">精装<input type="radio" name="zhuangxiu" value="精装"/></div>
						<div class="zhaofang-tag">毛坯<input type="radio" name="zhuangxiu" value="毛坯"/></div>
					</div>
					<div class="gengduo-bottom">
						<span id="tag-chongzhi">重置</span>
						<span class="gengduo-queding">确定</span>
						<input type="submit" name="" id="" value="确定" />
					</div>
					
				</form>
			</ul>
		</div>
		<!--***	-->
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="loupan-list" href="/mobile.php/building/detail?id=<?php echo ($vo["house_id"]); ?>">
			<div class="loupan-img"><img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" /></div>
			<div class="loupan-body">
				<div class="loupan-name"><?php echo ($vo["house_name"]); ?></div>
				<span class="zongjia"></span>
				<span class="loupan-jiage"><?php echo ($vo["junjia"]); ?>元/㎡</span>
				<div class="loupan-xinxi"><?php echo ($vo["dili"]); ?></div>
				<div class="loupan-xinxi"><?php echo ($vo["max_mianji"]); ?>㎡</div>
				<ul class="loupan-tag">
					<li>产权70年</li>
					<li>期房</li>
					<li>毛坯</li>
					<li>交通便利</li>
				</ul>
			</div>
		</a><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="many-box">
			<a class="many-link" href="/mobile.php/search/index">查看更多</a>
		</div>
		<div id="footer">
			<div class="footer-top">99新房网品质好房</div>
			<ul class="footer-nav">
				<li class="footer-menu">热门城市</li>
				<li class="footer-menu">热门楼盘</li>
			</ul>
			<div class="footer-list">
				<a href="search.html"><span></span>嘉善</a>
				<a href="search.html"><span></span>湖州</a>
				<a href="search.html"><span></span>海宁</a>
				<a href="search.html"><span></span>海盐</a>
				<a href="search.html"><span></span>南湖</a>
				<a href="search.html"><span></span>平湖</a>
				<a href="search.html"><span></span>桐乡</a>
				<a href="search.html"><span></span>秀洲</a>
				<a href="search.html"><span></span>宁波</a>
			</div>
			<div class="footer-list">
				<a href="search.html"><span></span>绿地长岛</a>
				<a href="search.html"><span></span>海盐</a>
				<a href="search.html"><span></span>秀洲区</a>
				<a href="search.html"><span></span>嘉善</a>
				<a href="search.html"><span></span>海盐</a>
				<a href="search.html"><span></span>秀洲区</a>
				<a href="search.html"><span></span>嘉善</a>
				<a href="search.html"><span></span>海盐</a>
				<a href="search.html"><span></span>秀洲区</a>
			</div>
			<div class="footer-bottom">北京缔峰华宇房地产经纪有限公司</div>
			<div class="footer-bottom">网络经营许可证 京ICP备16001860号-1</div>
		</div>
		<script type="text/javascript" src="/Public/mobile/js/shaixuan.js"></script>
		<script type="text/javascript" src="/Public/mobile/js/swiper.min.js"></script>
		<script type="text/javascript" src="/Public/mobile/js/index.js"></script>
	</body>
</html>