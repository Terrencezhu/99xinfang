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
		<link rel="stylesheet" type="text/css" href="/Public/home/css/jieguo.css"/>
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
								<a class="drop-menu" href="contach.html">联系我们</a>	
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

      
<link rel="stylesheet" type="text/css" href="/Public/home/css/jieguo.css"/>

			<!--顶部搜索-->
		<div class="sousuo-box">
			<div class="b-width">
				<div class="form-box">
					<span class="span-text"></span>
					<span class="span-submit"><span></span>搜索</span>
					<form class="input-box" action="">
						<input type="text" class="input-text" placeholder="请输入关键字（楼盘名/地名/开发商等）" value="请输入关键字（楼盘名/地名/开发商等）"/>
						<input type="submit" class="input-submit" value="搜索"/>
					</form>
				</div>
				<div class="sousuo-right">
					<span></span>
					<a class="sousuo-tag" href="loupan.html">绿地长岛</a>
					<a class="sousuo-tag" href="loupan.html">中南君悦府</a>
				</div>
			</div>
		</div>
		<div class="center" style="margin-bottom: 30px;">
			<form id="shaixuan" action="" style="border:none;">
				<ul class="shaixuan-list shaixuan-quyu">
					<div class="radio-head">楼盘区域：</div>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img0" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity0" checked="checked" type="radio" name="qy"/><span class="radio-span0">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img0" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity0" type="radio" name="qy"/><span class="radio-span0">嘉兴</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img0" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity0" type="radio" name="qy"/><span class="radio-span0">无锡</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img0" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity0" type="radio" name="qy"/><span class="radio-span0">宁波</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img0" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity0" type="radio" name="qy"/><span class="radio-span0">南通</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img0" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity0" type="radio" name="qy"/><span class="radio-span0">苏州</span></div>
					</li>
				</ul>
				<ul class="shaixuan-city">
					<li class="shaixuan-list-one">
						<div class="radio-img radio-img-6" style="background:#c73619;"></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity-6" checked="checked" type="radio" name="jg"/><span class="radio-span6">不限</span></div>
					</li>
					<li>
						<div class="radio-img radio-div radio-img-6"></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity-6" type="radio" name="xc"/><span class="radio-span6">嘉善</span></div>
					</li>
					<li>
						<div class="radio-img radio-div radio-img-6"></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity-6" type="radio" name="xc"/><span class="radio-span6">平湖</span></div>
					</li>
					<li>
						<div class="radio-img radio-div radio-img-6"></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity-6" type="radio" name="xc"/><span class="radio-span6">海盐 </span></div>
					</li>
					<li>
						<div class="radio-img radio-div radio-img-6"></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity-6" type="radio" name="xc"/><span class="radio-span6">海宁</span></div>
					</li>
					<li>
						<div class="radio-img radio-div radio-img-6"></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity-6" type="radio" name="xc"/><span class="radio-span6">桐乡</span></div>
					</li>
					<li>
						<div class="radio-img radio-div radio-img-6"></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity-6" type="radio" name="xc"/><span class="radio-span6">湖州</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">楼盘价格：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" checked="checked" type="radio" name="jg"/><span class="radio-span1">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" name="jg"/><span class="radio-span1">40万以下</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" name="jg"/><span class="radio-span1">40万-55万</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" name="jg"/><span class="radio-span1">55万-70万</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" name="jg"/><span class="radio-span1">70万-85万</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" name="jg"/><span class="radio-span1">100万以上</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">楼盘类型：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" checked="checked" name="lx"/><span class="radio-span2">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" name="lx"/><span class="radio-span2">普通住宅</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" name="lx"/><span class="radio-span2">公寓</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" name="lx"/><span class="radio-span2">洋房</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" name="lx"/><span class="radio-span2">别墅</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" name="lx"/><span class="radio-span2">商铺</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">面积范围：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" checked="checked" name="mj"/><span class="radio-span3">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" name="mj"/><span class="radio-span3">60㎡以下</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" name="mj"/><span class="radio-span3">60㎡-90㎡</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" name="mj"/><span class="radio-span3">90㎡-120㎡</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" name="mj"/><span class="radio-span3">120㎡-150㎡</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" name="mj"/><span class="radio-span3">150㎡以上</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">销售类型：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img4" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity4" type="radio" checked="checked" name="xs"/><span class="radio-span4">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img4" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity4" type="radio" name="xs"/><span class="radio-span4">在售</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img4" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity4" type="radio" name="xs"/><span class="radio-span4">待售</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">建筑类型：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img5" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity5" type="radio" checked="checked" name="jz"/><span class="radio-span5">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img5" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity5" type="radio" name="jz"/><span class="radio-span5">现房</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img5" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity5" type="radio" name="jz"/><span class="radio-span5">期房</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">精准筛选：</div>
					<form class="shaixuan-search">
						<input type="text" name="" id="search-name" placeholder="请输入姓名" value="请输入姓名" />
						<input type="text" name="" id="search-phone" placeholder="请输入手机号" value="请输入手机号" />
						<input type="submit" name="" id="search-shaixuan" value="人工精准为您筛选" />
					</form>
				</ul>
			</form>
			<div class="zhanxian">
				<div class="zhanxian-list">
					<a class="zhanxian-left" href="loupan.html" target="_blank"><img class="zhanxianimg" src="/Public/home/img/loupan/fine-01.png" alt="" /></a>
					<div class="zhanxian-right">
						<a class="zhanxian-title" href="" target="_blank">海天翼（海天印象） </a>
						<p class="zhanxian-xinxi">参考总价：<span>现房50% 期房40%</span></p>
						<p class="zhanxian-xinxi">户型：<span>46㎡-126㎡</span></p>
						<p class="zhanxian-xinxi">首付：<span>现房50% 期房40%</span></p>
						<p class="zhanxian-xinxi">地址：<span>东戴河南戴河北戴河</span></p>
						<ul class="zhanxian-tag"><li>产权70年</li><li>现房</li><li>精装</li><li>旅游地产</li></ul>
						<div class="zhanxian-jiage">价格：<span>15500元/㎡</span></div>
						<div class="zixun" onclick="doyoo.util.openChat('g=10059322');return false;">联系客服</div>
					</div>
				</div>
			</div>

		</div>

		<script type="text/javascript" src="/Public/home/js/tongyong.js"></script>
		<script type="text/javascript" src="/Public/home/js/jieguo.js"></script>
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