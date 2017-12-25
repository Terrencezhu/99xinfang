<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE]>
<![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="zh-CN" class="ie8">
  <![endif]-->
  <!--[if IE 9 ]>
  <html dir="ltr" lang="zh-CN" class="ie9">
    <![endif]-->
    <!--[if (gt IE 9)|!(IE)]>
    <!-->
    <html dir="ltr" lang="zh-CN">
      <!--<![endif]-->
      
      	<head>
		<meta charset="utf-8" />
		<title>99新房网_品质好房尽在99</title>
		<link rel="stylesheet" href="/Public/home/css/style.css"/>
		<!-- <link rel="stylesheet" href="/Public/home/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/hot.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/search.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/baoming.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/contach.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/loupan.css"/>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=mspnPTYYnjZb3sNu36ysEZw1"></script>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/member.css"/>
		<link rel="stylesheet" href="/Public/home/css/newtext.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/team.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/we.css"/>
 -->
 		
		<link rel="stylesheet" type="text/css" href="/Public/home/css/news.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/page.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="/Public/houtaiimg/page.css" /> -->
	</head>

  <body class="common-home">
      
      <header>
		<!--头部导航-->
		<div class="nav-box">
			<div id="nav">
				<div id="logo"><img src="/Public/home/img/logo.jpg" alt="" /></div>
				<div id="city">
					<p id="city-text"><span class="city-img"></span>上海</p>
					<div id="citymenu-box">
						<div class="citymenu-top"></div>
						<div id="citymenu">
							<p class="citymenu-t">选择城市</p>
						<?php if(is_array($region_top)): $i = 0; $__LIST__ = $region_top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="city-menu" href="/index.php/Search/search?id=<?php echo ($vo["region_id"]); ?>"><?php echo ($vo["region_name"]); ?></a>
						<!-- 	<a class="city-menu" href="/index.php/Search/search">环上海</a>
							<a class="city-menu" href="/index.php/Search/search">东戴河</a> --><?php endforeach; endif; else: echo "" ;endif; ?>
							<p class="citymenu-b">其他城市将陆续开放</p>
						
						</div>
					</div>
				</div>
				<div class="navmenu">
					<li class="nav-menu"><a href="/index.php/Index/index">首页</a></li>
					<li class="nav-menu"><a href="/index.php/Hot/hot">热门推荐</a></li>
					<li class="nav-menu"><a href="/index.php/Search/search">楼盘查询</a></li>
					<li class="nav-menu"><a href="/index.php/News/news">房产资讯</a></li>
					<li class="nav-menu" id="we">
						<a href="/index.php/Aboutwe/we">关于我们</a>
						<div id="drop">
							<div class="citymenu-top"></div>
							<div id="dropmenu">
								<a class="drop-menu" href="/index.php/Aboutwe/we">公司简介</a>
								<a class="drop-menu" href="/index.php/Aboutwe/we">置业顾问团队</a>
								<a class="drop-menu" href="/index.php/Aboutwe/contach">联系我们</a>	
							</div>
						</div>
					</li>	
				</div>
			</div>
		</div>
</header>

      <flow>
		
		<div id="flow-box">
			<ul id="flow">
				<li class="flowmenu">
					<img src="/Public/home/img/flow-01.png" alt="" />
					<div class="flow-left flow-lefts">咨询热线：<span class="dense-phone">400-8792-777</span><img class="flow-arr" src="/Public/home/img/flow-arr.png" alt="" /></div>
				</li>
				<li class="flowmenu">
					<img onclick="doyoo.util.openChat('g=10059322');return false;" src="/Public/home/img/flow-02.png" alt="" />
					<div class="flow-left">在线咨询<img class="flow-arr" src="/Public/home/img/flow-arr.png" alt="" /></div>
				</li>
				<li id="flowmenu3" class="flowmenu">
					<img src="/Public/home/img/flow-03.png" alt="" />
					<div class="flow-left">免费通话<img class="flow-arr" src="/Public/home/img/flow-arr.png" alt="" /></div>
				</li>
				<li id="flowmenu4" class="flowmenu">
					<img src="/Public/home/img/flow-04.png" alt="" />
					<div class="flow-left">购房预约<img class="flow-arr" src="/Public/home/img/flow-arr.png" alt="" /></div>
				</li>
			</ul>
			<ul id="flowbottom">
				<li class="flowmenu">
					<img src="/Public/home/img/flow-05.png" alt="" />
					<div class="flow-left flowweixin">
						<div id="flow-weixin"><img src="/Public/home/img/weixin.jpg" alt="" /></div>
						<p>99新房</p>
						<p>微信公众号</p>
						<img class="flow-arr" src="/Public/home/img/flow-arr.png" alt="" />
					</div>
				</li>
				<li class="flowmenu" id="btn">
					<img src="/Public/home/img/flow-06.png" alt="" />
					<div class="flow-left">回到顶部<img class="flow-arr" src="/Public/home/img/flow-arr.png" alt="" /></div>
				</li>
			</ul>
			<div id="flowcontent">
				<ul id="flow-top">
					<li>99新房</li>
					<li>竭诚为您服务</li>
				</ul>
				<form id="flowform" action="/index.php/Common/addkehu" method="post" target="iframe">
					<input id="flow_name" type="text" placeholder="请输入您的称呼" name="kehu_name" value="请输入您的称呼"/>
					<input id="flow_phone" type="text"  placeholder="请输入您的手机号"  name="kehu_tel" value="请输入您的手机号"/>
					<input id="flow_th" type="submit" value="免费通话" name="button" />
				</form>
				<iframe name="iframe" style="display:none;"></iframe>
				<p class="flow-tel">免费咨询热线：<span class="dense-phone">400-8792-777</span></p>
				<p class="flow-tag">99新房全程为您服务</p>
				<div class="flow-liucheng">
					<img src="/Public/home/img/flowliucheng.jpg" alt="" />
				</div>
				<p id="flow-bottom"></p>
			</div>
		</div>
</flow>

      
		<link rel="stylesheet" type="text/css" href="/Public/home/css/we.css"/>

		<div id="we-banner" class="banner-box">
			<div class="banner-img" style="display: block;"><img src="/Public/home/img/banner/hot-banner1.jpg" alt="" /></div>
			<div class="banner-img"><img src="/Public/home/img/banner/hot-banner2.jpg" alt="" /></div>
			<div class="banner-img"><img src="/Public/home/img/banner/hot-banner3.jpg" alt="" /></div>
			<ul id="banner-num">
				<li class="banner-num-li"></li>
				<li class="banner-num-li"></li>
				<li class="banner-num-li" style="margin-right: 0;"></li>
			</ul>
			<div id="banner-left" onclick="bannerL()"><div></div></div>
			<div id="banner-right" onclick="bannerR()"><div></div></div>
		</div>
		<div class="center">
			<div id="address"><i></i><a class="" href="index.html">99新房></a>楼盘查询</div>
			<div class="title-index">公司简介</div>
			<p class="we-title">我们是谁？</p>
			<p class="we-titles">懂你所需、做你所想</p>
			<ul class="we-jianjie-box">
				<li class="we-jianjie">
					九九人以质量兴业，服务为先，挑战自我，率先与市场接轨，推崇“热情、专业、真诚”的服务宗旨，奉守“优质、高效、诚信、追求卓越”的经营理念，
					九九人以质量兴业，服务为先，挑战自我，率先与市场接轨，推崇“热情、专业、真诚”的服务宗旨，奉守“优质、高效、诚信、追求卓越”的经营理念，
					九九人以质量兴业，服务为先，挑战自我，率先与市场接轨，推崇“热情、专业、真诚”的服务宗旨，奉守“优质、高效、诚信、追求卓越”的经营理念，
					九九人以质量兴业，服务为先，挑战自我，率先与市场接轨，推崇“热情、专业、真诚”的服务宗旨，奉守“优质、高效、诚信、追求卓越”的经营理念，
				</li>
				<li class="we-logo"><img src="/Public/home/img/we-logo.jpg" alt="" /></li>
			</ul>
			<div class="title-index">咨询师团队</div>
			<ul class="we-team">
				<li>
					<a href=""><img src="/Public/home/img/we-team1.png" alt="" /></a>
					<p class="we-team-name">大美丽</p>
					<div>首席咨询师</div>
				</li>
				<li>
					<a href=""><img src="/Public/home/img/we-team2.png" alt="" /></a>
					<p class="we-team-name">大美丽</p>
					<div>首席咨询师</div>
				</li>
				<li>
					<a href=""><img src="/Public/home/img/we-team3.png" alt="" /></a>
					<p class="we-team-name">大美丽</p>
					<div>首席咨询师</div>
				</li>
				<li>
					<a href=""><img src="/Public/home/img/we-team4.png" alt="" /></a>
					<p class="we-team-name">大美丽</p>
					<div>首席咨询师</div>
				</li>
				<li>
					<a href=""><img src="/Public/home/img/we-team5.png" alt="" /></a>
					<p class="we-team-name">大美丽</p>
					<div>首席咨询师</div>
				</li>
				<li>
					<a href=""><img src="/Public/home/img/we-team6.png" alt="" /></a>
					<p class="we-team-name">大美丽</p>
					<div>首席咨询师</div>
				</li>
				<li>
					<a href=""><img src="/Public/home/img/we-team7.png" alt="" /></a>
					<p class="we-team-name">大美丽</p>
					<div>首席咨询师</div>
				</li>
				<li>
					<a href=""><img src="/Public/home/img/we-team8.png" alt="" /></a>
					<p class="we-team-name">大美丽</p>
					<div>首席咨询师</div>
				</li>
			</ul>
			<div class="title-index">联系我们</div>
			<ul class="we-bottom">
				<li class="we-address we-transition">
					<img src="/Public/home/img/we-bottom1.png" alt="" />
					<p>公司地址</p>
					<div>北京市通州区九棵树东路甲422号</div>
					<div>808室</div>
				</li>
				<li class="we-phone we-transition">
					<img src="/Public/home/img/we-bottom2.png" alt="" />
					<p>联系电话</p>
					<div>人事电话：17343186095</div>
					<div>客服电话：00000000000</div>
				</li>
				<li class="we-qq we-transition">
					<img src="/Public/home/img/we-bottom3.png" alt="" />
					<p>联系QQ</p>
					<div>客服小刘：000000000</div>
					<div>客服小张：000000000</div>
				</li>
			</ul>
		</div>

		<script  type="text/ " src="/Public/home/js/tongyong.js"></script>
		<script type="text/javascript" src="/Public/home/js/banner.js"></script>
		<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20001185/10056872.js"></script>


      <footer>
	
			<!--底部-->
		<div class="footer-box">
			<div id="footer">
				<img class="footer-img" src="/Public/home/img/weixin.jpg" alt="" />
				<div class="footer-nav">
					<a href="we.html">关于我们</a>
					<a href="contach.html">联系我们</a>
					<a href="joinus.html">加入我们</a>
					<a href="#">服务项目</a>
					<a href="#">网站地图</a>
					<div class="footer-phone">咨询热线<span class="dense-phone"><span></span>400-8650-777</span></div>
				</div>
				<ul class="footer-list">
					<li>热销楼盘推荐</li>
					<li class="footer-tag"><a href="search.html">上海区域</a></li>
					<li class="footer-tag"><a href="search.html">北京区域</a></li>
					<li class="footer-tag"><a href="search.html">秦皇岛区域</a></li>
				</ul>
				<div class="footer-loupan footer-loupans"><!--上海区域-->
					<a href="loupan.html" target="_blank">新西塘孔雀城</a>
					<a href="loupan.html" target="_blank">佳兆业</a>
					<a href="loupan.html" target="_blank">恒泰.时间海</a>
					<a href="loupan.html" target="_blank">岸上澜湾</a>
					<a href="loupan.html" target="_blank">海岸一号</a>
					<a href="loupan.html" target="_blank">海天翼</a>
					<a href="loupan.html" target="_blank">海韵馨园</a>
					<a href="loupan.html" target="_blank">海韵星城</a>
					<a href="loupan.html"  target="_blank">利源幸福浬</a>
					<a href="loupan.html" target="_blank">花屿海</a></br>
					<a href="loupan.html" target="_blank">地中海风情小镇</a>
					<a href="loupan.html" target="_blank">鑫宏盛世</a>
					<a href="loupan.html" target="_blank">文化星城</a>
					<a href="loupan.html" target="_blank">云基地</a>
					<a href="loupan.html" target="_blank">金沙美地</a>
				</div>
				<div class="footer-loupan"><!--北京区域-->
					<a href="loupan.html" target="_blank">八达岭孔雀城</a>
					<a href="loupan.html" target="_blank">佳兆业</a>
					<a href="loupan.html" target="_blank">恒泰.时间海</a>
					<a href="loupan.html" target="_blank">岸上澜湾</a>
					<a href="loupan.html" target="_blank">海岸一号</a>
					<a href="loupan.html" target="_blank">海天翼</a>
					<a href="loupan.html" target="_blank">海韵馨园</a>
					<a href="loupan.html" target="_blank">海韵星城</a>
					<a href="loupan.html"  target="_blank">利源幸福浬</a>
					<a href="loupan.html" target="_blank">花屿海</a></br>
					<a href="loupan.html" target="_blank">地中海风情小镇</a>
					<a href="loupan.html" target="_blank">鑫宏盛世</a>
					<a href="loupan.html" target="_blank">文化星城</a>
					<a href="loupan.html" target="_blank">云基地</a>
					<a href="loupan.html" target="_blank">金沙美地</a>
				</div>
				<div class="footer-loupan"><!--秦皇岛区域-->
					<a href="loupan.html" target="_blank">御海龙湾</a>
					<a href="loupan.html" target="_blank">佳兆业</a>
					<a href="loupan.html" target="_blank">恒泰.时间海</a>
					<a href="loupan.html" target="_blank">岸上澜湾</a>
					<a href="loupan.html" target="_blank">海岸一号</a>
					<a href="loupan.html" target="_blank">海天翼</a>
					<a href="loupan.html" target="_blank">海韵馨园</a>
					<a href="loupan.html" target="_blank">海韵星城</a>
					<a href="loupan.html" target="_blank">利源幸福浬</a>
					<a href="loupan.html" target="_blank">花屿海</a></br>
					<a href="loupan.html" target="_blank">地中海风情小镇</a>
					<a href="loupan.html" target="_blank">鑫宏盛世</a>
					<a href="loupan.html" target="_blank">文化星城</a>
					<a href="loupan.html" target="_blank">云基地</a>
					<a href="loupan.html" target="_blank">金沙美地</a>
				</div>
				<p class="footer-text">99新房网为您提供2017年全国楼盘动态，包括北京、上海、杭州等主要热门城市，包括最新楼盘、在售信息、新房开盘等，真实的</br>新房数据和实时的楼盘信息，尽在99新房网！</p>
			</div>
		</div>
		<div id="footer-bottom"><p>嘉兴缔峰信息科技有限公司  版权所有 |  ©2017 99xinfang.com, all rights reserved.</p></div>
</footer>
  </body>
</html>