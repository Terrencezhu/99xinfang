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

      
			<!-- <link rel="stylesheet" type="text/css" href="/Public/home/css/news.css"/> -->
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
			<div id="news-head">
				<form class="news-head-right" action="">
					<p class="news-head-top">遇到购房难题？没找到心仪的新房？</br>我们免费为您找房！</p>
					<div><input type="text" name="" id="news-quyu" placeholder="您想在哪里买房？" value="您想在哪里买房？" /></div>
					<div><input type="text" name="" id="news-yusuan" placeholder="您的购房预算？" value="您的购房预算？" /></div>
					<div><input type="text" name="" id="news-name" placeholder="请输入您的姓名：" value="请输入您的姓名：" /></div>
					<div><input type="text" name="" id="news-phone" placeholder="请输入您的手机号码：" value="请输入您的手机号码：" /></div>
					<div><input type="submit" value="发送给咨询师" id="news-submit"/></div>
				</form>
			</div>
		</div>
		<div class="sousuo-box">
			<div class="b-width">
				<div class="form-box">
					<span class="span-text"></span>
					<span class="span-submit"><span></span>搜索</span>
					<form class="input-box" action="">
						<input type="text" class="input-text" placeholder="更多房产知识" value="更多房产知识"/>
						<input type="submit" class="input-submit" value="搜索"/>
					</form>
				</div>
				<div class="sousuo-right">
					<a class="sousuo-tag" href="newtext.html" target="_blank">限购政策</a>
					<a class="sousuo-tag" href="newtext.html" target="_blank">买房注意</a>
					<a class="sousuo-tag" href="newtext.html" target="_blank">选房技巧</a>
					<a class="sousuo-tag" href="newtext.html" target="_blank">房产证</a>
					<a class="sousuo-tag" href="newtext.html" target="_blank">小产权</a>
				</div>
			</div>
		</div>
		<div id="address"><i></i><a class="" href="index.html">99新房></a>房产咨询</div>
		<div class="center">
			<ul class="news-nav">
				<li class="news-nav-li"><a class="news-na" style="border-bottom-width:1px;color:#e14122;">楼市分析</a></li>
				<li class="news-nav-li"><a class="news-na">买房准备</a></li>
				<li class="news-nav-li"><a class="news-na">看房选房</a></li>
				<li class="news-nav-li"><a class="news-na">订房签约</a></li>
			</ul>
			<div class="news-left">
				<!--楼市分析-->
				<div class="news-list-box" style="display: block;">
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？1</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img5.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img6.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
				</div>
				<!--买房准备-->
				<div class="news-list-box">
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？2</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img5.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img6.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
				</div>
				<!--看房选房-->
				<div class="news-list-box">
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？3</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img5.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img6.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
				</div>
				<!--订房签约-->
				<div class="news-list-box">
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？4</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img5.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img6.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
					<div class="news-list">
						<a class="news-list-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="news-list-right">
							<a class="news-list-title textoverflow" href="newtext.html" target="_blank"><span>[买房准备]</span>西红门房价下跌？是真是假？</a>
							<p class="news-list-time">2017-05-04 17：18：35  </p>
							<p class="news-list-text">2017年西红门房价将何去何从，2017西红门房价会下跌吗？可能对于很多在该区有购房需求的人士来说...</p>
							<a class="news-list-button" href="newtext.html" target="_blank">查看详情</a>
						</div>
					</div>
				</div>
			</div>
			<!--右部实时推荐-->
			<div class="tuijian">
				<!--买房必读-->
				<div id="bidu">
					<div class="tuijian-title tuijian-width"><span>买房必读</span></div>
					<a class="bidu-img tuijian-width" href="newtext.html" target="_blank">
						<img src="/Public/home/img/news-img1.jpg" alt="" />
					</a>
					<ul class="bidu-list tuijian-width">
						<li>
							<a class="bidi-text textoverflow" href="newtext.html" target="_blank"><span class="bidu-num">1</span>公积金提取简化</a>
						</li>
						<li>
							<a class="bidi-text textoverflow" href="newtext.html" target="_blank"><span class="bidu-num" >2</span>公积金提取简化</a>
						</li>
						<li>
							<a class="bidi-text textoverflow" href="newtext.html" target="_blank"><span class="bidu-num">3</span>公积金提取简化</a>
						</li>
						<li>
							<a class="bidi-text textoverflow" href="newtext.html" target="_blank"><span class="bidu-num">4</span>公积金提取简化</a>
						</li>
						<li>
							<a class="bidi-text textoverflow" href="newtext.html" target="_blank"><span class="bidu-num">5</span>公积金提取简化</a>
						</li>
						<li>
							<a class="bidi-text textoverflow" href="newtext.html" target="_blank"><span class="bidu-num">6</span>公积金提取简化</a>
						</li>
					</ul>
				</div>
				<!--精选热文-->
				<div id="rewen">
					<div class="tuijian-title tuijian-width"><span>精选热文</span></div>
					<div class="rewen-list tuijian-width">
						<a class="rewen-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img1.jpg" alt="" /></a>
						<div class="rewen-body">
							<a class="rewen-text" href="newtext.html" target="_blank">刚刚，央行关键指标“爆冷”！买房人吓出一身汗央行关键指标“爆冷”！买房人吓出一身汗</a>
							<div class="rewen-time">08-17</div>
						</div>
					</div>
					<div class="rewen-list tuijian-width">
						<a class="rewen-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img2.jpg" alt="" /></a>
						<div class="rewen-body">
							<a class="rewen-text" href="newtext.html" target="_blank">刚刚，央行关键指标“爆冷”！买房人吓出一身汗央行关键指标“爆冷”！买房人吓出一身汗</a>
							<div class="rewen-time">08-17</div>
						</div>
					</div>
					<div class="rewen-list tuijian-width">
						<a class="rewen-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img3.jpg" alt="" /></a>
						<div class="rewen-body">
							<a class="rewen-text" href="newtext.html" target="_blank">刚刚，央行关键指标“爆冷”！买房人吓出一身汗央行关键指标“爆冷”！买房人吓出一身汗</a>
							<div class="rewen-time">08-17</div>
						</div>
					</div>
					<div class="rewen-list tuijian-width">
						<a class="rewen-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img4.jpg" alt="" /></a>
						<div class="rewen-body">
							<a class="rewen-text" href="newtext.html" target="_blank">刚刚，央行关键指标“爆冷”！买房人吓出一身汗央行关键指标“爆冷”！买房人吓出一身汗</a>
							<div class="rewen-time">08-17</div>
						</div>
					</div>
					<div class="rewen-list tuijian-width">
						<a class="rewen-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img5.jpg" alt="" /></a>
						<div class="rewen-body">
							<a class="rewen-text" href="newtext.html" target="_blank">刚刚，央行关键指标“爆冷”！买房人吓出一身汗央行关键指标“爆冷”！买房人吓出一身汗</a>
							<div class="rewen-time">08-17</div>
						</div>
					</div>
					<div class="rewen-list tuijian-width" style="border:0;">
						<a class="rewen-img" href="newtext.html" target="_blank"><img src="/Public/home/img/news-img6.jpg" alt="" /></a>
						<div class="rewen-body">
							<a class="rewen-text" href="newtext.html" target="_blank">刚刚，央行关键指标“爆冷”！买房人吓出一身汗央行关键指标“爆冷”！买房人吓出一身汗</a>
							<div class="rewen-time">08-17</div>
						</div>
					</div>
				</div>
				<!--热门楼盘推荐-->
				<div id="loupan">
					<div class="tuijian-title tuijian-width"><span>精品楼盘推荐</span></div>
					<div class="loupan-list tuijian-width">
						<a class="loupan-img" href="loupan.html" target="_blank"><img src="/Public/home/img/loupan/fine-07.png" alt="" /></a>
						<div class="loupan-body">
							<a class="loupan-name" href="loupan.html" target="_blank">中南君悦府</a>
							<div class="loupan-quyu">嘉善县</div>
							<div class="loupan-jiage">均价：10000元/㎡</div>
							<a class="loupan-button" href="loupan.html" target="_blank">查看楼盘</a>
						</div>
					</div>
					<div class="loupan-list tuijian-width">
						<a class="loupan-img" href="loupan.html" target="_blank"><img src="/Public/home/img/loupan/fine-08.png" alt="" /></a>
						<div class="loupan-body">
							<a class="loupan-name" href="loupan.html" target="_blank">中南君悦府</a>
							<div class="loupan-quyu">嘉善县</div>
							<div class="loupan-jiage">均价：10000元/㎡</div>
							<a class="loupan-button" href="loupan.html" target="_blank">查看楼盘</a>
						</div>
					</div>
					<div class="loupan-list tuijian-width">
						<a class="loupan-img" href="loupan.html" target="_blank"><img src="/Public/home/img/loupan/fine-09.png" alt="" /></a>
						<div class="loupan-body">
							<a class="loupan-name" href="loupan.html" target="_blank">中南君悦府</a>
							<div class="loupan-quyu">嘉善县</div>
							<div class="loupan-jiage">均价：10000元/㎡</div>
							<a class="loupan-button" href="loupan.html" target="_blank">查看楼盘</a>
						</div>
					</div>
					<div class="loupan-list tuijian-width">
						<a class="loupan-img" href="loupan.html" target="_blank"><img src="/Public/home/img/loupan/fine-10.png" alt="" /></a>
						<div class="loupan-body">
							<a class="loupan-name" href="loupan.html" target="_blank">中南君悦府</a>
							<div class="loupan-quyu">嘉善县</div>
							<div class="loupan-jiage">均价：10000元/㎡</div>
							<a class="loupan-button" href="loupan.html" target="_blank">查看楼盘</a>
						</div>
					</div>
					<div class="loupan-list tuijian-width">
						<a class="loupan-img" href="loupan.html" target="_blank"><img src="/Public/home/img/loupan/fine-11.png" alt="" /></a>
						<div class="loupan-body">
							<a class="loupan-name" href="loupan.html" target="_blank">中南君悦府</a>
							<div class="loupan-quyu">嘉善县</div>
							<div class="loupan-jiage">均价：10000元/㎡</div>
							<a class="loupan-button" href="loupan.html" target="_blank">查看楼盘</a>
						</div>
					</div>
					<div class="loupan-list tuijian-width" style="border:0;">
						<a class="loupan-img" href="loupan.html" target="_blank"><img src="/Public/home/img/loupan/fine-12.png" alt="" /></a>
						<div class="loupan-body">
							<a class="loupan-name" href="loupan.html" target="_blank">中南君悦府</a>
							<div class="loupan-quyu">嘉善县</div>
							<div class="loupan-jiage">均价：10000元/㎡</div>
							<a class="loupan-button" href="loupan.html" target="_blank">查看楼盘</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a id="news-many" href="newmany.html">查看更多</a>

		<script  type="text/javascript" src="/Public/home/js/tongyong.js"></script>
		<script type="text/javascript" src="/Public/home/js/banner.js"></script>
		<script type="text/javascript" src="/Public/home/js/news.js"></script>
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