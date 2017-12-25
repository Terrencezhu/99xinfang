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

      
		<link rel="stylesheet" type="text/css" href="/Public/home/css/hot.css"/>
				<div id="banner">
			<div id="index-banner" class="banner-box">
				<div class="banner-img" style="display: block;"><img src="/Public/home/img/banner/hot-banner1.jpg" alt="" /></div>
				<div class="banner-img"><img src="/Public/home/img/banner/hot-banner2.jpg" alt="" /></div>
				<div class="banner-img"><img src="/Public/home/img/banner/hot-banner3.jpg" alt="" /></div>
				<div class="banner-img"><img src="/Public/home/img/banner/hot-banner4.jpg" alt="" /></div>
				<div class="banner-img"><img src="/Public/home/img/banner/hot-banner5.jpg" alt="" /></div>
				<ul id="banner-num">
					<li class="banner-num-li"></li>
					<li class="banner-num-li"></li>
					<li class="banner-num-li"></li>
					<li class="banner-num-li"></li>
					<li class="banner-num-li" style="margin-right: 0;"></li>
				</ul>
		 		<div id="banner-left" onclick="bannerL()"><div></div></div>
				<div id="banner-right" onclick="bannerR()"><div></div></div>
			</div>
		</div>
		<div id="address"><i></i><a class="" href="index.html">99新房></a>热门楼盘推荐</div>
		<div class="center">
			<div class="title-index">御海龙湾<span>/位于辽宁省东戴河</span></div>
			<ul id="pinpai" class="hot-list">
				<li class="pinpai-li1 hot-show">
					<a class="hot-href" href="loupan.html"><img src="/Public/home/img/hota-01.jpg" alt="" /></a>
					<div class="hot-hidden">
						<a class="hot-hidden-loupan" href="loupan.html">御海龙湾</a>
						<p>均价：6000元/㎡ 户型面积：65-140㎡</p>
					</div>
				</li>
				<li class="pinpai-li3">
					<div class="hot-hover" style="margin-bottom: 10px;">
						<a class="hot-href" href="loupan.html"><img src="/Public/home/img/hota-02.jpg" alt="" /></a>
						<p class="hottag">投资</p>
					</div>
					<div class="hot-hover">
						<a class="hot-href" href="loupan.html"><img src="/Public/home/img/hota-03.jpg" alt="" /></a>
						<p class="hottag">休闲</p>
					</div>
				</li>
				<li class="pinpai-li2 hot-hover">
					<a class="hot-href" href="loupan.html"><img src="/Public/home/img/hota-04.jpg" alt="" /></a>
					<p class="hottag">居住</p>
				</li>
			</ul>
			<p class="hot-jianjie">随意自由、享受生活</p>
			<p class="hot-text">有怎样的理想，就有怎样的追求;有怎样的追求，就有怎样的品质;有怎样的品质，就有怎样的生活。</p>
			<p class="hot-peitao">周边配套</p>
			<div class="hot-peitao-box">
				<ul class="hot-list-ul1">
					<div>交通配套</div>
					<li>高铁：8分钟直达东戴河高铁站</li>
					<li>机场：15分钟直达山海关机场</li>
					<li>自驾：25分钟到达秦皇岛市中心</li>
				</ul>
				<ul class="hot-list-ul2">
					<div>教育配套</div>
					<li>幼儿园：古城幼儿园、南园幼儿园</li>
					<li>小学：古城幼儿园、南园幼儿园</li>
					<li>中学：山海关一中、山海关二中等</li>
				</ul>
				<ul class="hot-list-ul3">
					<div>购物配套</div>
					<li>新世纪购物广场</li>
					<li>鑫和百货商场</li>
					<li>万商商贸城</li>
				</ul>
				<ul class="hot-list-ul4">
					<div>医疗配套</div>
					<li>山海关人民医院</li>
					<li>秦皇岛工人医院</li>
					<li>开发区第二医院</li>
				</ul>
				<ul class="hot-list-ul5">
					<div>餐饮配套</div>
					<li>蓝色百合主题中餐厅</li>
					<li>海点食府</li>
					<li>东戴河润海园渔家院</li>
				</ul>
			</div>
			<a class="hot-many" href="loupan.html">查看详情</a>
			<div class="title-index">地中海风情小镇<span>/位于辽宁省东戴河</span></div>
			<div class="hot-list">
				<div class="hot-list-head hot-show">
					<a class="hot-href" href="loupan.html"><img src="/Public/home/img/hotb-01.jpg" alt="" /></a>
					<div class="hot-hidden">
						<a class="hot-hidden-loupan" href="loupan.html">御海龙湾</a>
						<p>均价：6000元/㎡ 户型面积：65-140㎡</p>
					</div>
				</div>
				<div class="hot-list-two">
					<a class="hot-hover hot-href" href="loupan.html">
						<img src="/Public/home/img/hotb-02.jpg" alt="" />
						<p class="hottag">养老</p>
					</a>
					<a class="hot-hover hot-href" href="loupan.html">
						<img src="/Public/home/img/hotb-03.jpg" alt="" />
						<p class="hottag">居住</p>
					</a>
					<a class="hot-hover hot-href" href="loupan.html" style="margin-right:0;">
						<img src="/Public/home/img/hotb-04.jpg" alt="" />
						<p class="hottag">投资</p>
					</a>
				</div>
			</div>
			<p class="hot-jianjie">随意自由、享受生活</p>
			<p class="hot-text">有怎样的理想，就有怎样的追求;有怎样的追求，就有怎样的品质;有怎样的品质，就有怎样的生活。</p>
			<p class="hot-peitao">周边配套</p>
			<div class="hot-peitao-box">
				<ul class="hot-list-ul1">
					<div>交通配套</div>
					<li>高铁：8分钟直达东戴河高铁站</li>
					<li>机场：15分钟直达山海关机场</li>
					<li>自驾：25分钟到达秦皇岛市中心</li>
				</ul>
				<ul class="hot-list-ul2">
					<div>教育配套</div>
					<li>幼儿园：古城幼儿园、南园幼儿园</li>
					<li>小学：古城幼儿园、南园幼儿园</li>
					<li>中学：山海关一中、山海关二中等</li>
				</ul>
				<ul class="hot-list-ul3">
					<div>购物配套</div>
					<li>新世纪购物广场</li>
					<li>鑫和百货商场</li>
					<li>万商商贸城</li>
				</ul>
				<ul class="hot-list-ul4">
					<div>医疗配套</div>
					<li>山海关人民医院</li>
					<li>秦皇岛工人医院</li>
					<li>开发区第二医院</li>
				</ul>
				<ul class="hot-list-ul5">
					<div>餐饮配套</div>
					<li>蓝色百合主题中餐厅</li>
					<li>海点食府</li>
					<li>东戴河润海园渔家院</li>
				</ul>
			</div>
			<a class="hot-many" href="loupan.html">查看详情</a>
			<div class="title-index">地中海风情小镇<span>/位于辽宁省东戴河</span></div>
			<div class="hot-list hot-list3">
				<a class="hot-three-left hot-show hot-href" href="loupan.html">
					<img src="/Public/home/img/hotc-01.jpg" alt="" />
					<div class="hot-hidden">
						<p class="hot-hidden-loupan" href="loupan.html">御海龙湾</p>
						<p>均价：6000元/㎡ 户型面积：65-140㎡</p>
					</div>
				</a>
				<div class="hot-three-right">
					<a class="hot-three-top hot-hover hot-href" href="loupan.html">
						<img src="/Public/home/img/hotc-02.jpg" alt="" />
						<p class="hottag">居住</p>
					</a>
					<div>
						<a class="hot-hover hot-href" href="loupan.html" style="margin-left: 0;">
							<img src="/Public/home/img/hotc-03.jpg" alt="" />
							<p class="hottag">投资</p>
						</a>
						<a class="hot-hover hot-href" href="loupan.html">
							<img src="/Public/home/img/hotc-04.jpg" alt="" />
							<p class="hottag">休闲</p>
						</a>
					</div>
				</div>
			</div>
			<p class="hot-jianjie">随意自由、享受生活</p>
			<p class="hot-text">有怎样的理想，就有怎样的追求;有怎样的追求，就有怎样的品质;有怎样的品质，就有怎样的生活。</p>
			<p class="hot-peitao">周边配套</p>
			<div class="hot-peitao-box">
				<ul class="hot-list-ul1">
					<div>交通配套</div>
					<li>高铁：8分钟直达东戴河高铁站</li>
					<li>机场：15分钟直达山海关机场</li>
					<li>自驾：25分钟到达秦皇岛市中心</li>
				</ul>
				<ul class="hot-list-ul2">
					<div>教育配套</div>
					<li>幼儿园：古城幼儿园、南园幼儿园</li>
					<li>小学：古城幼儿园、南园幼儿园</li>
					<li>中学：山海关一中、山海关二中等</li>
				</ul>
				<ul class="hot-list-ul3">
					<div>购物配套</div>
					<li>新世纪购物广场</li>
					<li>鑫和百货商场</li>
					<li>万商商贸城</li>
				</ul>
				<ul class="hot-list-ul4">
					<div>医疗配套</div>
					<li>山海关人民医院</li>
					<li>秦皇岛工人医院</li>
					<li>开发区第二医院</li>
				</ul>
				<ul class="hot-list-ul5">
					<div>餐饮配套</div>
					<li>蓝色百合主题中餐厅</li>
					<li>海点食府</li>
					<li>东戴河润海园渔家院</li>
				</ul>
			</div>
			<a class="hot-many"  href="loupan.html">查看详情</a>
			<a id="hot-manys" href="search.html">查看更多>></a>
		</div>

		<script type="text/javascript" src="/Public/home/js/tongyong.js"></script>
		<script  type="text/javascript" src="/Public/home/js/banner.js"></script>
		<script  type="text/javascript" src="/Public/home/js/hot.js"></script>
		<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20001185/10056872.js"></script>


      <footer>
	
			<!--底部-->
		<div class="footer-box">
			<div id="footer">
				<img class="footer-img" src="/Public/home/img/weixin.jpg" alt="" />
				<div class="footer-nav">
					<a href="/index.php/Aboutwe/we">关于我们</a>
					<a href="/index.php/Aboutwe/contach">联系我们</a>
					<a href="#">加入我们</a>
					<a href="#">服务项目</a>
					<a href="#">网站地图</a>
					<div class="footer-phone">咨询热线<span class="dense-phone"><span></span>400-8650-777</span></div>
				</div>
				<ul class="footer-list">
					<li>热销楼盘推荐</li>
					<?php if(is_array($region_name)): $i = 0; $__LIST__ = $region_name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="footer-tag"><a href="/index.php/Search/search"><?php echo ($vo["region_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<div class="footer-loupan footer-loupans">
				<?php if(is_array($house_name)): $i = 0; $__LIST__ = $house_name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>" target="_blank"><?php echo ($vo["house_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<p class="footer-text">99新房网为您提供2017年全国楼盘动态，包括北京、上海、杭州等主要热门城市，包括最新楼盘、在售信息、新房开盘等，真实的</br>新房数据和实时的楼盘信息，尽在99新房网！</p>
			</div>
		</div>
		<div id="footer-bottom"><p>嘉兴缔峰信息科技有限公司  版权所有 |  ©2017 99xinfang.com, all rights reserved.</p></div>
</footer>
  </body>
</html>