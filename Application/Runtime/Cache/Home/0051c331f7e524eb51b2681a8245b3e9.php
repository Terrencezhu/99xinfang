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

      
<link rel="stylesheet" type="text/css" href="/Public/home/css/loupan.css"/>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=mspnPTYYnjZb3sNu36ysEZw1"></script>
				<!--顶部搜索-->
		<div class="sousuo-box">
			<div class="b-width">
				<div class="form-box">
					<span class="span-text"></span>
					<span class="span-submit"><span></span>搜索</span>
					<form class="input-box" action="/index.php/Search/search" method="get">
						<input type="text" class="input-text" name="guanjianzi"  placeholder="请输入关键字（楼盘名/地名/开发商等）" value="请输入关键字（楼盘名/地名/开发商等）"/>
						<input type="submit" class="input-submit" value="搜索"/>
					</form>
				</div>
				<div class="sousuo-right">
					<span></span>
					<a class="sousuo-tag" href="/index.php/Loupan/detail?id=25">绿地长岛</a>
					<a class="sousuo-tag" href="/index.php/Loupan/detail?id=5">中南君悦府</a>
					<a class="sousuo-tag" href="/index.php/Loupan/detail?id=1">新西塘孔雀城</a>

				</div>
			</div>
		</div>
		<!--楼盘顶部信息-->
		<a name="index"></a>
		<div id="loupan-head">
			<div id="address"><i></i><a class="" href="/index.php/Index/index">99新房></a><a class="" href="/index.php/Search/search">上海周边></a><a class="" href="/index.php/Search/search">嘉兴楼盘></a>
							<a class="" href="/index.php/Search/search">嘉善楼盘></a><a>新西塘孔雀城</a>
			</div>
			<div class="b-width">
				<div id="head-left">
					<div id="head-scroll">
						<?php if(is_array($house_image)): $i = 0; $__LIST__ = $house_image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="head-img"><img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" /></div><?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <div class="head-img"><img src="/Public/home/img/head-01.jpg" alt="" /></div> -->
<!-- 						<div class="head-img"><img src="/Public/home/img/head-02.jpg" alt="" /></div>
						<div class="head-img"><img src="/Public/home/img/head-03.jpg" alt="" /></div>
						<div class="head-img"><img src="/Public/home/img/head-04.jpg" alt="" /></div> -->
						<div id="head-img-left" onclick="headLeft(headImg);"><img src="/Public/home/img/img-left.png" alt="" /></div>
						<div id="head-img-right" onclick="headRight(headImg);"><img src="/Public/home/img/img-right.png" alt="" /></div>
						<ul id="head-tag">
							<li>品牌地产</li>
							<li>低总价</li>
							<li>交通便利</li>
							<li>国际化社区</li>
						</ul>
					</div>
					<ul id="head-img-meum">
						<?php if(is_array($house_image)): $i = 0; $__LIST__ = $house_image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <div class="head-img"><img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" /></div> -->
	                        <li class="head-img-list">
								<img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" />
								<div class="head-img-msg"><?php if($vo["img_class"] == xgt): ?>效果图<?php endif; if($vo["img_class"] == ybj): ?>样板间<?php endif; if($vo["img_class"] == sjt): ?>实景图<?php endif; if($vo["img_class"] == ptt): ?>配套图<?php endif; ?></div>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- 			<li class="head-img-list">
							<img src="/Public/home/img/head-02.jpg" alt="" />
							<div class="head-img-msg">样板间</div>
						</li>
						<li class="head-img-list">
							<img src="/Public/home/img/head-03.jpg" alt="" />
							<div class="head-img-msg">规划图</div>
						</li>
						<li class="head-img-list" style="margin-right: 0;">
							<img src="/Public/home/img/head-04.jpg" alt="" />
							<div class="head-img-msg">配套图</div>
						</li> -->
					</ul>
				</div>
				<!--右部内容-->
				<div id="head-right">
					<div id="loupan-name"><?php echo ($house_info["house_name"]); ?></div>
					<div class="head-xinxi">参考均价：<span><?php echo ($house_info["junjia"]); ?>元/㎡</span><a class="head-tool head-tool1" href=""><span></span>房贷计算器</a></div>
					<div class="head-xinxi">楼盘户型：<?php echo ($house_info["mix_mianji"]); ?>㎡~<?php echo ($house_info["max_mianji"]); ?>㎡</div>
					<div class="head-xinxi">总参考价格：<span><?php echo ($house_info["mix_price"]); ?>~<?php echo ($house_info["max_price"]); ?>万</span></div>
					<div class="head-xinxi">楼盘地址：<?php echo ($house_info["house_address"]); ?><a class="head-tool head-tool2" href="#zhoubian"><span></span>查看地图</a></div>
					<div class="head-xinxi">最新开盘时间：<?php echo ($house_info["first_time"]); ?><a class="head-tool head-tool3" href="/index.php/Loupan/baoming"><span></span>开盘、降价、优惠通知</a></div>
					<div class="head-xinxi">交房时间：<?php echo ($house_info["last_time"]); ?></div>
					<div id="head-search">
						<div class="head-search-tel">全国统一咨询热线：<span class="dense-phone"><?php echo ($house_info["tel"]); ?></span></div>
						<div class="head-search-txt">预约后一小时内会有一对一高级咨询师与您联系，当天即可免费专车看房。</div>
						<div class="form-box">
							<span class="span-text"></span>
							<span class="span-submit"><span></span>免费咨询</span>
							<form class="input-box" action="">
								<input type="text" class="input-text" placeholder="请输入您的手机号" value="请输入您的手机号"/>
								<input type="submit" class="input-submit" value="免费咨询"/>
							</form>
						</div>		
					</div>
				</div>
					
			</div>
		</div>
		<!--楼盘图册    点击跳出-->
		<div id="img-background">
			<div id="img-guanbi"></div>
		</div>
		<div id="img-main">
			<!--顶部导航-->
			<div id="img-top">
				<span id="img-name">项目名称</span>
				<ul id="img-nav">
					<li class="img-tag">效果图[<span class="img-shu"></span>]</li>
					<li class="img-tag">样板间[<span class="img-shu"></span>]</li>
					<li class="img-tag">规划图[<span class="img-shu"></span>]</li>
					<li class="img-tag">实景图[<span class="img-shu"></span>]</li>
					<li class="img-tag">配套图[<span class="img-shu"></span>]</li>
				</ul>
			</div>
			<!--效果图-->
			<div class="img-box" style="display: block;">
				<div class="img-list img-xiaoguo" style="display: block;"><img src="/Public/home/img/loupan/fine-01.png" alt="" /></div>
				<div class="img-list img-xiaoguo"><img src="/Public/home/img/loupan/fine-02.png" alt="" /></div>
				<div class="img-list img-xiaoguo"><img src="/Public/home/img/loupan/fine-03.png" alt="" /></div>
				<div class="img-list img-xiaoguo"><img src="/Public/home/img/loupan/fine-04.png" alt="" /></div>
				<div class="img-list img-xiaoguo"><img src="/Public/home/img/loupan/fine-05.png" alt="" /></div>
				<div class="img-list img-xiaoguo"><img src="/Public/home/img/loupan/fine-06.png" alt="" /></div>
				<div class="img-list img-xiaoguo"><img src="/Public/home/img/loupan/fine-07.png" alt="" /></div>
				<!--左右控制箭头-->
				<div class="img-left" onclick="imgLeft(imgXiaoguo,imgBottomBox[0],xiaoguoOpacity);"><img src="/Public/home/img/img-left.png" alt="" /></div>
				<div class="img-right" onclick="imgRight(imgXiaoguo,imgBottomBox[0],xiaoguoOpacity);"><img src="/Public/home/img/img-right.png" alt="" /></div>
				<!--底部小图-->
				<div class="img-bottom-box">
					<ul class="img-bottom">
						<li class="small-img small-xiaoguo" style="margin-left: 0;">
							<img src="/Public/home/img/loupan/fine-01.png" alt="" />
							<div class="small-opacity xiaoguo-opacity" style="display: none;"></div>
						</li>
						<li class="small-img small-xiaoguo">
							<img src="/Public/home/img/loupan/fine-02.png" alt="" />
							<div class="small-opacity xiaoguo-opacity"></div>
						</li>
						<li class="small-img small-xiaoguo">
							<img src="/Public/home/img/loupan/fine-03.png" alt="" />
							<div class="small-opacity xiaoguo-opacity"></div>
						</li>
						<li class="small-img small-xiaoguo">
							<img src="/Public/home/img/loupan/fine-04.png" alt="" />
							<div class="small-opacity xiaoguo-opacity"></div>
						</li>
						<li class="small-img small-xiaoguo">
							<img src="/Public/home/img/loupan/fine-05.png" alt="" />
							<div class="small-opacity xiaoguo-opacity"></div>
						</li>
						<li class="small-img small-xiaoguo">
							<img src="/Public/home/img/loupan/fine-06.png" alt="" />
							<div class="small-opacity xiaoguo-opacity"></div>
						</li>
						<li class="small-img small-xiaoguo">
							<img src="/Public/home/img/loupan/fine-07.png" alt="" />
							<div class="small-opacity xiaoguo-opacity"></div>
						</li>
					</ul>
				</div>
			</div>
			<!--样板间-->
			<div class="img-box">
				<div class="img-list img-yangban" style="display: block;"><img src="/Public/home/img/loupan/yangban-01.png" alt="" /></div>
				<div class="img-list img-yangban"><img src="/Public/home/img/loupan/yangban-02.png" alt="" /></div>
				<div class="img-list img-yangban"><img src="/Public/home/img/loupan/yangban-03.png" alt="" /></div>
				<div class="img-list img-yangban"><img src="/Public/home/img/loupan/yangban-04.png" alt="" /></div>
				<div class="img-list img-yangban"><img src="/Public/home/img/loupan/yangban-05.png" alt="" /></div>
				<!--左右控制箭头-->
				<div class="img-left" onclick="imgLeft(imgYangban,imgBottomBox[1],yangbanOpacity);"><img src="/Public/home/img/img-left.png" alt="" /></div>
				<div class="img-right" onclick="imgRight(imgYangban,imgBottomBox[1],yangbanOpacity);"><img src="/Public/home/img/img-right.png" alt="" /></div>
				<div class="img-bottom-box">
					<ul class="img-bottom">
						<li class="small-img small-yangban" style="margin-left: 0;">
							<img src="/Public/home/img/loupan/yangban-01.png" alt="" />
							<div class="small-opacity yangban-opacity" style="display: none;"></div>
						</li>
						<li class="small-img small-yangban">
							<img src="/Public/home/img/loupan/yangban-02.png" alt="" />
							<div class="small-opacity yangban-opacity"></div>
						</li>
						<li class="small-img small-yangban">
							<img src="/Public/home/img/loupan/yangban-03.png" alt="" />
							<div class="small-opacity yangban-opacity"></div>
						</li>
						<li class="small-img small-yangban">
							<img src="/Public/home/img/loupan/yangban-04.png" alt="" />
							<div class="small-opacity yangban-opacity"></div>
						</li>
						<li class="small-img small-yangban">
							<img src="/Public/home/img/loupan/yangban-05.png" alt="" />
							<div class="small-opacity yangban-opacity"></div>
						</li>
					</ul>
				</div>
			</div>
			<!--规划图-->
			<div class="img-box">
				<div class="img-list img-guihua" style="display: block;"><img src="/Public/home/img/loupan/guihua-01.png" alt="" /></div>
				<div class="img-list img-guihua"><img src="/Public/home/img/loupan/guihua-02.png" alt="" /></div>
				<div class="img-list img-guihua"><img src="/Public/home/img/loupan/guihua-03.png" alt="" /></div>
				<!--左右控制箭头-->
				<div class="img-left" onclick="imgLeft(imgGuihua,imgBottomBox[2],guihuaOpacity);"><img src="/Public/home/img/img-left.png" alt="" /></div>
				<div class="img-right" onclick="imgRight(imgGuihua,imgBottomBox[2],guihuaOpacity);"><img src="/Public/home/img/img-right.png" alt="" /></div>
				<div class="img-bottom-box">
					<ul class="img-bottom">
						<li class="small-img small-guihua" style="margin-left: 0;">
							<img src="/Public/home/img/loupan/guihua-01.png" alt="" />
							<div class="small-opacity guihua-opacity" style="display: none;"></div>
						</li>
						<li class="small-img small-guihua">
							<img src="/Public/home/img/loupan/guihua-02.png" alt="" />
							<div class="small-opacity guihua-opacity"></div>
						</li>
						<li class="small-img small-guihua">
							<img src="/Public/home/img/loupan/guihua-03.png" alt="" />
							<div class="small-opacity guihua-opacity"></div>
						</li>
					</ul>
				</div>
			</div>
			<!--实景图-->
			<div class="img-box">
				<div class="img-list img-shijing" style="display: block;"><img src="/Public/home/img/loupan/shijing-01.png" alt="" /></div>
				<div class="img-list img-shijing"><img src="/Public/home/img/loupan/shijing-02.png" alt="" /></div>
				<div class="img-list img-shijing"><img src="/Public/home/img/loupan/shijing-03.png" alt="" /></div>
				<div class="img-list img-shijing"><img src="/Public/home/img/loupan/shijing-04.png" alt="" /></div>
				<div class="img-list img-shijing"><img src="/Public/home/img/loupan/shijing-05.png" alt="" /></div>
				<div class="img-list img-shijing"><img src="/Public/home/img/loupan/shijing-06.png" alt="" /></div>
				<div class="img-list img-shijing"><img src="/Public/home/img/loupan/shijing-07.png" alt="" /></div>
				<div class="img-list img-shijing"><img src="/Public/home/img/loupan/shijing-08.png" alt="" /></div>
				<!--左右控制箭头-->
				<div class="img-left" onclick="imgLeft(imgShijing,imgBottomBox[3],shijingOpacity);"><img src="/Public/home/img/img-left.png" alt="" /></div>
				<div class="img-right" onclick="imgRight(imgShijing,imgBottomBox[3],shijingOpacity);"><img src="/Public/home/img/img-right.png" alt="" /></div>
				<div class="img-bottom-box">
					<ul class="img-bottom">
						<li class="small-img small-shijing" style="margin-left: 0;">
							<img src="/Public/home/img/loupan/shijing-01.png" alt="" />
							<div class="small-opacity shijing-opacity" style="display: none;"></div>
						</li>
						<li class="small-img small-shijing">
							<img src="/Public/home/img/loupan/shijing-02.png" alt="" />
							<div class="small-opacity shijing-opacity"></div>
						</li>
						<li class="small-img small-shijing">
							<img src="/Public/home/img/loupan/shijing-03.png" alt="" />
							<div class="small-opacity shijing-opacity"></div>
						</li>
						<li class="small-img small-shijing">
							<img src="/Public/home/img/loupan/shijing-04.png" alt="" />
							<div class="small-opacity shijing-opacity"></div>
						</li>
						<li class="small-img small-shijing">
							<img src="/Public/home/img/loupan/shijing-05.png" alt="" />
							<div class="small-opacity shijing-opacity"></div>
						</li>
						<li class="small-img small-shijing">
							<img src="/Public/home/img/loupan/shijing-06.png" alt="" />
							<div class="small-opacity shijing-opacity"></div>
						</li>
						<li class="small-img small-shijing">
							<img src="/Public/home/img/loupan/shijing-07.png" alt="" />
							<div class="small-opacity shijing-opacity"></div>
						</li>
						<li class="small-img small-shijing">
							<img src="/Public/home/img/loupan/shijing-08.png" alt="" />
							<div class="small-opacity shijing-opacity"></div>
						</li>
					</ul>
				</div>
			</div>
			<!--配套图-->
			<div class="img-box">
				<div class="img-list img-peitao" style="display: block;"><img src="/Public/home/img/loupan/peitao-01.png" alt="" /></div>
				<div class="img-list img-peitao"><img src="/Public/home/img/loupan/peitao-02.png" alt="" /></div>
				<div class="img-list img-peitao"><img src="/Public/home/img/loupan/peitao-03.png" alt="" /></div>
				<div class="img-list img-peitao"><img src="/Public/home/img/loupan/peitao-04.png" alt="" /></div>
				<div class="img-list img-peitao"><img src="/Public/home/img/loupan/peitao-05.png" alt="" /></div>
				<div class="img-list img-peitao"><img src="/Public/home/img/loupan/peitao-06.png" alt="" /></div>
				<!--左右控制箭头-->
				<div class="img-left" onclick="imgLeft(imgPeitao,imgBottomBox[4],peitaoOpacity);"><img src="/Public/home/img/img-left.png" alt="" /></div>
				<div class="img-right" onclick="imgRight(imgPeitao,imgBottomBox[4],peitaoOpacity);"><img src="/Public/home/img/img-right.png" alt="" /></div>
				<div class="img-bottom-box">
					<ul class="img-bottom">
						<li class="small-img small-peitao" style="margin-left: 0;">
							<img src="/Public/home/img/loupan/peitao-01.png" alt="" />
							<div class="small-opacity peitao-opacity" style="display: none;"></div>
						</li>
						<li class="small-img small-peitao">
							<img src="/Public/home/img/loupan/peitao-02.png" alt="" />
							<div class="small-opacity peitao-opacity"></div>
						</li>
						<li class="small-img small-peitao">
							<img src="/Public/home/img/loupan/peitao-03.png" alt="" />
							<div class="small-opacity peitao-opacity"></div>
						</li>
						<li class="small-img small-peitao">
							<img src="/Public/home/img/loupan/peitao-04.png" alt="" />
							<div class="small-opacity peitao-opacity"></div>
						</li>
						<li class="small-img small-peitao">
							<img src="/Public/home/img/loupan/peitao-05.png" alt="" />
							<div class="small-opacity peitao-opacity"></div>
						</li>
						<li class="small-img small-peitao">
							<img src="/Public/home/img/loupan/peitao-05.png" alt="" />
							<div class="small-opacity peitao-opacity"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="center">
			<!--楼盘导航，页面滑动显示-->
			<div id="loupan-nav-box">
				<ul id="loupan-nav">
					<a href="#index">楼盘首页</a>
					<a href="#xiangqing">楼盘详情</a>
					<a href="#huxing">户型介绍</a>
					<a href="#zhoubian">周边分析</a>
					<a onclick="navTuce()">楼盘图册</a>
					<a href="#jiage">历史价格</a>
					<a href="#jianjie">项目简介</a>
					<a href="baoming.html">我要看房</a>
				</ul>
			</div>
			<!--置业顾问-->
<!-- 			<a class="loupan-title" href=""><span>置业顾问推荐</span></a>
			<div id="loupan-guwen">
				<div class="guwen guwen-margin">
					<a class="guwen-img" href="member.html" target="_blank"><img src="/Public/home/img/zixunshi.jpg" alt="" /></a>
					<div class="guwen-body">
						<a class="guwen-name" href="member.html" target="_blank">大美丽</a>
						<div class="guwen-xinxi">所属区域：<span>嘉兴分公司</span></div>
						<div class="guwen-xinxi">近期带看：<span>16次</span></div>
						<div class="guwen-tel"><span></span>400-8972-777转123</div>
						<div class="zixun" onclick="doyoo.util.openChat('g=10059322');return false;"></div>
					</div>
				</div>
				<div class="guwen guwen-margin">
					<a class="guwen-img" href="member.html" target="_blank"><img src="/Public/home/img/zixunshi.jpg" alt="" /></a>
					<div class="guwen-body">
						<a class="guwen-name" href="member.html" target="_blank">大美丽</a>
						<div class="guwen-xinxi">所属区域：<span>嘉兴分公司</span></div>
						<div class="guwen-xinxi">近期带看：<span>16次</span></div>
						<div class="guwen-tel"><span></span>400-8972-777转123</div>
						<div class="zixun" onclick="doyoo.util.openChat('g=10059322');return false;"></div>
					</div>
				</div>
				<div class="guwen">
					<a class="guwen-img" href="member.html" target="_blank"><img src="/Public/home/img/zixunshi.jpg" alt="" /></a>
					<div class="guwen-body">
						<a class="guwen-name" href="member.html" target="_blank">大美丽</a>
						<div class="guwen-xinxi">所属区域：<span>嘉兴分公司</span></div>
						<div class="guwen-xinxi">近期带看：<span>16次</span></div>
						<div class="guwen-tel"><span></span>400-8972-777转123</div>
						<div class="zixun" onclick="doyoo.util.openChat('g=10059322');return false;"></div>
					</div>
				</div>
			</div>
			<a id="guwen-link" href="team.html" target="_blank">点击查看全部顾问信息</a> -->
			<!--楼盘详情-->
			<a class="loupan-title" name="xiangqing"><span>楼盘详情</span></a>
			<div id="loupan-xiangqing">
				<ul class="xiangqing xiangqings">
					<div class="xiangqing-title">基本信息</div>
					<li class="xiangqing-text">楼盘名称：<span><?php echo ($house_info["house_name"]); ?></span></li>
					<li class="xiangqing-text">楼盘地址：<span><?php echo ($house_info["house_address"]); ?></span></li>
					<li class="xiangqing-text">物业类型：<span><?php echo ($house_info["wuye_type"]); ?></span></li>
					<li class="xiangqing-text">建筑类型：<span><?php echo ($house_info["build_type"]); ?></span></li>
					<li class="xiangqing-text">开  发  商：<span><?php echo ($house_info["developer"]); ?></span></li>
					<li class="xiangqing-text">地理位置：<span><?php echo ($house_info["dili"]); ?></span></li>
					<li class="xiangqing-text">楼盘特点：<span>国际化社区</span></li>
				</ul>
				<ul class="xiangqing">
					<div class="xiangqing-title">销售信息</div>
					<li class="xiangqing-text">参考均价：<span><?php echo ($house_info["junjia"]); ?>元/㎡</span></li>
					<li class="xiangqing-text">销售状态：<span><?php echo ($house_info["xiaoshou_zt"]); ?></span></li>
					<li class="xiangqing-text">优惠信息：<span><?php echo ($house_info["youhuixinxi"]); ?></span></li>
					<li class="xiangqing-text">最新开盘：<span><?php echo ($house_info["first_time"]); ?></span></li>
					<li class="xiangqing-text">最早交房：<span><?php echo ($house_info["last_time"]); ?></span></li>
					<li class="xiangqing-text">楼盘面积：<span><?php echo ($house_info["mix_mianji"]); ?>㎡~<?php echo ($house_info["max_mianji"]); ?>㎡</span></li>
					<li class="xiangqing-text">产权年限：<span><?php echo ($house_info["property_right"]); ?>年</span></li>
				</ul>
				<ul class="xiangqing">
					<div class="xiangqing-title">小区信息</div>
					<li class="xiangqing-text">物业公司：<span><?php echo ($house_info["wuye"]); ?></span></li>
					<li class="xiangqing-text">物业费用：<span><?php echo ($house_info["wuye_price"]); ?>元/平米/月</span></li>
					<li class="xiangqing-text">供暖方式：<span><?php echo ($house_info["gongnuan"]); ?></span></li>
					<li class="xiangqing-text">车位情况：<span><?php echo ($house_info["car"]); ?></span></li>
					<li class="xiangqing-text">容  积  率：<span><?php echo ($house_info["rongjilv"]); ?></span></li>
					<li class="xiangqing-text">装修状况：<span><?php echo ($house_info["decorate"]); ?></span></li>
					<li class="xiangqing-text">绿  化  率：<span><?php echo ($house_info["green"]); ?></span></li>
					
				</ul>
			</div>
			<!--户型介绍-->
			<a class="loupan-title" name="huxing"><span>户型介绍</span></a>
			<div id="loupan-huxing">
			<?php if(is_array($hxt_info)): $i = 0; $__LIST__ = $hxt_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="huxing">
					<div class="huxing-img"><img src="/Upload/lphxt/<?php echo ($v["hx_img"]); ?>" alt="" /></div>
					<div class="huxing-body">
						<div class="huxing-mianji">
							<span><?php echo ($v["jushi"]); ?></span>
							<span>建筑面积约<?php echo ($v["hx_mianji"]); ?>㎡</span>
							<span class="huxing-zhuangtai">在售</span>
						</div>
						<div class="huxing-jiage">
							<a class="huxing-a"><span><?php echo ($v["junjia"]); ?></span>元/㎡</br>参考均价</a>
							<a class="huxing-a"><span><?php echo ($v["ck_price"]); ?></span>万</br>参考总价</a>
							<a>约<span><?php echo ($v["ck_shoufu"]); ?></span>元</br>参考首付</a>
						</div>
						<div class="huxing-tol">
							<a class="huxing-chakan"><span></span>查看户型原图</a>
							<a class="huxing-jisuan"><span></span>计算房贷</a>
						</div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>
			<div id="huxing-link">查看更多户型</div>
			<!--户型大图-->
			<div id="huxing-background">
				<div id="huxing-guanbi"></div>
			</div>
			<div id="huxing-main">
	
				<div id="huxing-big-box">
					<div class="huxing-big-img">
						<div class="huxing-big" style="display: block;"><img src="/Upload/lphxt/<?php echo ($v["hx_img"]); ?>" alt="" /></div>
<!-- 						<div class="huxing-big"><img src="/Public/home/img/loupan/huxing-02.jpg" alt="" /></div>
						<div class="huxing-big"><img src="/Public/home/img/loupan/huxing-03.jpg" alt="" /></div>
						<div class="huxing-big"><img src="/Public/home/img/loupan/huxing-04.jpg" alt="" /></div> -->
						<div class="huxing-left" onclick="huxingLeft()"><img src="/Public/home/img/img-left.png" alt="" /></div>
						<div class="huxing-right" onclick="huxingRight()"><img src="/Public/home/img/img-right.png" alt="" /></div>
					</div>
					<ul id="huxing-small-box">
						<li class="huxing-small" style="margin-left: 0;"><img src="/Upload/lphxt/<?php echo ($v["hx_img"]); ?>" alt="" /></li>
<!-- 						<li class="huxing-small"><img src="/Public/home/img/loupan/huxing-02.jpg" alt="" /></li>
						<li class="huxing-small"><img src="/Public/home/img/loupan/huxing-03.jpg" alt="" /></li>
						<li class="huxing-small"><img src="/Public/home/img/loupan/huxing-04.jpg" alt="" /></li> -->
					</ul>
				</div>
				<div id="huxing-body">
					<div class="huxing-title"><b><?php echo ($v["house_name"]); ?></b></div>
					<div class="huxing-xinxi"><b>居室：</b><span><?php echo ($v["jushi"]); ?></span></div>
					<div class="huxing-xinxi"><b>建筑面积：</b><span><?php echo ($v["hx_mianji"]); ?>㎡</span></div>
					<div class="huxing-xinxi"><b>建筑类型：</b><span><?php echo ($v["build_type"]); ?></span></div>
					<div class="huxing-zhuangtai">在售</div>
					<div class="huxing-border"></div>
					<div class="huxing-xinxi"><b>参考均价：</b><span><?php echo ($v["junjia"]); ?>元/㎡</span></div>
					<div class="huxing-xinxi"><b>参考总价：</b><span><?php echo ($v["ck_price"]); ?>万元</span></div>
					<div class="huxing-xinxi"><b>参考首付</b>：<span><?php echo ($v["ck_shoufu"]); ?>万元</span></div>
					<div class="huxing-tel"><span></span><?php echo ($v["tel"]); ?></div>
				</div>
			</div>
			</volist>
			<!--购房早知道-->
			<a class="loupan-title" name="zhidao"><span>购房早知道</span></a>
			<div id="loupan-new">
				<div class="new">
					<a href="/index.php/News/newtext" target="_blank"><span>1</span>新房开盘购买流程的简单介绍和说明</a>
					<a href="/index.php/News/newtext" target="_blank"><span>2</span>什么是容积率 容积率多少最合适？</a>
					<a href="/index.php/News/newtext" target="_blank"><span>3</span>小高层住宅几层最好？各层的优劣势分析...</a>
					<a href="/index.php/News/newtext" target="_blank"><span>4</span>容积率是什么意思，高层建筑容积率大吗？</a>
				</div>
				<div class="new" style="border-right:0;">
					<a href="/index.php/News/newtext" target="_blank"><span>5</span>小产权房可以抵押吗，购买小产权房有风险吗？</a>
					<a href="/index.php/News/newtext" target="_blank"><span>6</span>建筑容积率计算公式以及其它参数介绍</a>
					<a href="/index.php/News/newtext" target="_blank"><span>7</span>复式住宅和跃层住宅区别是什么？哪种好？</a>
					<a href="/index.php/News/newtext" target="_blank"><span>8</span>小产权房法律法规有什么限制？</a>
				</div>
			</div>
			<!--周边分析-->
			<a class="loupan-title" name="zhoubian"><span>周边分析</span></a>
			<div id="loupan-map">
				<div id="container"></div>
				<div id="map-right">
					<div class="map-top">周边配套</div>
					<ul id="map-list">
						<li class="mapl-li" onclick="mapS(mapMath[0])">
							<div class="map-tag"><img src="/Public/home/img/map-01.png" alt="" /></div>
							<div class="map-keyword">购物</div>
						</li>
						<li class="mapl-li" onclick="mapS(mapMath[1])">
							<div class="map-tag"><img src="/Public/home/img/map-02.png" alt="" /></div>
							<div class="map-keyword">教育</div>
						</li>
						<li class="mapl-li" onclick="mapS(mapMath[2])">
							<div class="map-tag"><img src="/Public/home/img/map-03.png" alt="" /></div>
							<div class="map-keyword">医院</div>
						</li>
						<li class="mapl-li" onclick="mapS(mapMath[3])">
							<div class="map-tag"><img src="/Public/home/img/map-04.png" alt="" /></div>
							<div class="map-keyword">餐饮</div>
						</li>
						<li class="mapl-li" onclick="mapS(mapMath[4])">
							<div class="map-tag"><img src="/Public/home/img/map-05.png" alt="" /></div>
							<div class="map-keyword">娱乐</div>
						</li>
						<li class="mapl-li" onclick="mapS(mapMath[5])">
							<div class="map-tag"><img src="/Public/home/img/map-06.png" alt="" /></div>
							<div class="map-keyword">公园</div>
						</li>
						<li class="mapl-li" onclick="mapS(mapMath[6])">
							<div class="map-tag"><img src="/Public/home/img/map-07.png" alt="" /></div>
							<div class="map-keyword">交通</div>
						</li>
						<li class="mapl-li" onclick="mapS(mapMath[7])">
							<div class="map-tag"><img src="/Public/home/img/map-08.png" alt="" /></div>
							<div class="map-keyword">金融</div>
						</li>
						<li class="mapl-li" onclick="mapS(mapMath[8])">
							<div class="map-tag"><img src="/Public/home/img/map-09.png" alt="" /></div>
							<div class="map-keyword">小区</div>
						</li>
					</ul>
				</div>
			</div>
			<!--历史价格-->
			<a class="loupan-title" name="jiage"><span>历史价格</span></a>
			<div id="loupan-jiage">
				<ul class="jiage jiage-top">
					<li>记录时间</li>
					<li>均价</li>
					<li>最高价</li>
					<li>最低价</li>
					<li>价格说明</li>
				</ul>
				<ul class="jiage">
					<li>2017年05月</li>
					<li>14000元/㎡</li>
					<li>--</li>
					<li>--</li>
					<li>优惠享受内部价</li>
				</ul>
				<ul class="jiage">
					<li>2017年05月</li>
					<li>14000元/㎡</li>
					<li>--</li>
					<li>--</li>
					<li>优惠享受内部价</li>
				</ul>
				<ul class="jiage">
					<li>2017年05月</li>
					<li>14000元/㎡</li>
					<li>--</li>
					<li>--</li>
					<li>优惠享受内部价</li>
				</ul>
				<ul class="jiage">
					<li>2017年05月</li>
					<li>14000元/㎡</li>
					<li>--</li>
					<li>--</li>
					<li>优惠享受内部价</li>
				</ul>
			</div>
			<!--项目简介-->
			<a class="loupan-title" name="jianjie"><span>项目简介</span></a>
			<div id="loupan-jianjie">
				<?php echo ($house_info["house_jianjie"]); ?>
			</div>
			<!--用户评论-->
			<!--<a class="loupan-title"><span>用户评论</span></a>
			<div id="loupan-pinglun">	
				<div class="pinglun">
					<div class="pinglun-ren">
						<a class="pinglun-touxiang" href="pinglun.html" target="_blank"><img src="/Public/home/img/404.jpg" alt="" /></a>
						<a class="pinglun-name" href="pinglun.html" target="_blank">99网友0001</a>
					</div>
					<div class="pinglun-body">
						<p class="pinglun-text">金卡首付款建设的回复 副科级暗示的话副科级杀了高科技撒个好时间可爱过后看来是价格高哈市济公活佛撒娇回复空间感和 ighsdhgk绝杀空间诗圣杜甫公司健康的发挥 四大皆空符合考生解答回复 深刻的积分很少看降龙伏虎 数据库东方航空时间阿富汗是暗红色的科技峰会会计师符合撒旦回复可见双方借款方空间撒旦方鸿渐凯撒和大家很快就萨哈夫发</p>
						<div class="pinglun-time">2017-08-06 20:21:56</div>
						<div class="pinglun-zan">
							<i class="zan-icon"><img class="zan-img" src="/Public/home/img/zan0.png" alt="" /></i>
							<span class="zan-num">21</span>
						</div>
						<a class="pinglun-huifu" href="pinglun.html" target="_blank">
							<i class="huifu-icon"><img class="huifu-img" src="/Public/home/img/huifu0.png" alt="" /></i>
							<span class="huifu-num">10</span>
						</a>
					</div>
				</div>
				<div class="pinglun">
					<div class="pinglun-ren">
						<a class="pinglun-touxiang" href="pinglun.html" target="_blank"><img src="/Public/home/img/404.jpg" alt="" /></a>
						<a class="pinglun-name" href="pinglun.html" target="_blank">99网友0002</a>
					</div>
					<div class="pinglun-body">
						<p class="pinglun-text">国际大奖赛德国暗示的规划空间暗示的韩国啊国画家暗示过安居客双方很骄傲思考和凯撒警方很快就暗示符合啊卡及换卡极速发货</p>
						<div class="pinglun-time">2017-08-06 20:21:56</div>
						<div class="pinglun-zan">
							<i class="zan-icon"><img class="zan-img" src="/Public/home/img/zan0.png" alt="" /></i>
							<span class="zan-num">18</span>
						</div>
						<a class="pinglun-huifu" href="pinglun.html" target="_blank">
							<i class="huifu-icon"><img class="huifu-img" src="/Public/home/img/huifu0.png" alt="" /></i>
							<span class="huifu-num">10</span>
						</a>
					</div>
				</div>
				<div class="pinglun pinglun-margin">
					<div class="pinglun-ren">
						<a class="pinglun-touxiang" href="pinglun.html" target="_blank"><img src="/Public/home/img/404.jpg" alt="" /></a>
						<a class="pinglun-name" href="pinglun.html" target="_blank">99网友0003</a>
					</div>
					<div class="pinglun-body">
						<p class="pinglun-text">国际大奖赛德国暗示的规划空间暗示的韩国啊国画家暗示过安居客双方很骄傲思考和凯撒警方很快就暗示符合啊卡及换卡极速发货</p>
						<div class="pinglun-time">2017-08-06 20:21:56</div>
						<div class="pinglun-zan">
							<i class="zan-icon"><img class="zan-img" src="/Public/home/img/zan0.png" alt="" /></i>
							<span class="zan-num">6</span>
						</div>
						<a class="pinglun-huifu" href="pinglun.html" target="_blank">
							<i class="huifu-icon"><img class="huifu-img" src="/Public/home/img/huifu0.png" alt="" /></i>
							<span class="huifu-num">10</span>
						</a>
					</div>
				</div>
			</div>
			<div id="pinglun-link"><a href="pinglun.html" target="_blank">我要评论</a>|<a href="pinglun.html" target="_blank">更多评论</a></div>-->
			<!--房贷计算器-->
			<a class="loupan-title"><span>房贷计算器</span></a>
			<div class="jisuan-body">
				<div class="jisuan-box">
					<div class="jisuan-tag">
						<span class="jisian-tag-title">贷款方式</span>
						<div id="fangshi" class="fangdai-text lilv-menubox">
							<span id="fangshi-show">商业贷款</span>
							<ul id="fangshi-menu" class="jisuan-menu">
								<li>商业贷款</li>
								<li>公积金贷款</li>
								<li>组合贷款</li>
							</ul>
						</div>
					</div>
					<!--商业贷款-->
					<div id="shangdai-box">
						<div class="jisuan-tag">
							<span class="jisian-tag-title">商业贷款总额</span>
							<input id="s-zonge" class="fangdai-text" type="text" name=" "value="" />
							<a class="jisuan-after">万</a>
						</div>
						<div class="jisuan-tag">
							<span class="jisian-tag-title">商贷年利率</span>
							<div id="s-lilv" class="fangdai-text lilv-menubox">
								<span id="s-lilv-show">基准利率</span>
								<ul id="s-lilv-menu" class="jisuan-menu">
									<li>基准利率</li>
									<li>7折</li>
									<li>7.5折</li>
									<li>8折</li>
									<li>8.5折</li>
									<li>9折</li>
									<li>1.05倍</li>
									<li>1.1倍</li>
									<li>1.2倍</li>
									<li>1.3倍</li>
								</ul>
							</div>
							<input id="s-lilv-text" class="fangdai-text" type="text" name="" value="" />
							<a class="jisuan-after">%</a>
						</div>
					</div>
					<!--公积金贷款-->
					<div id="gongjijin-box">
						<div class="jisuan-tag">
							<span class="jisian-tag-title">公积金贷款总额</span>
							<input id="g-zonge" class="fangdai-text" type="text" name=" "value="" />
							<a class="jisuan-after">万</a>
						</div>
						<div class="jisuan-tag">
							<span class="jisian-tag-title">公积金年利率</span>
							<div id="g-lilv" class="lilv-menubox fangdai-text">
								<span id="g-lilv-show">基准利率</span>
								<ul id="g-lilv-menu" class="jisuan-menu">
									<li>基准利率</li>
									<li>1.1倍</li>
									<li>1.2倍</li>
								</ul>
							</div>
							<input id="g-lilv-text" class="fangdai-text" type="text" name="" value="" />
							<a class="jisuan-after">%</a>
						</div>
					</div>
					<div class="jisuan-tag">
						<span class="jisian-tag-title">贷款期限</span>
						<div id="shijian" class="lilv-menubox fangdai-text">
							<span id="shijian-show">5年</span>
							<ul id="shijian-menu" class="jisuan-menu">
								<li>5年</li>
								<li>10年</li>
								<li>15年</li>
								<li>20年</li>
								<li>25年</li>
								<li>30年</li>
							</ul>
						</div>
					</div>
					<a class="kaishi" style="display: block;">开始计算</a>
					<a class="kaishi">开始计算</a>
					<a class="kaishi">开始计算</a>
				</div>
				<div class="jieguo-box">
					<ul class="jieguo-nav">
						<li class="jieguo-left">还款方式</li>
						<li class="jieguo-liw">等额本息还款</li>
						<li class="jieguo-liw">等额本金还款</li>
					</ul>
					<div class="jieguo-body">
						<ul class="jieguo-left">
							<li>还款月数</li>
							<li class="yuegong-height">月供</li>
							<li>总利息</li>
							<li>本息合计</li>
						</ul>
						<ul class="jieguo-liw">
							<li><span id="benxi-yue">0</span>月</li>
							<li class="yuegong-height"><span id="benxi-yuegong">0</span>元</li>
							<li><span id="benxi-zongli">0</span>元</li>
							<li><span id="benxi-heji">0</span>元</li>
						</ul>
						<ul class="jieguo-liw">
							<li><span id="benjin-yue">0</span>月</li>
							<li class="yuegong-height">
								<span id="benjin-yuegong">0</span>元
								<div class="jin-num">每月递减<span id="benjin-dijian">0</span>元</div>
							</li>
							<li><span id="benjin-zongli">0</span>元</li>
							<li><span id="benjin-heji">0</span>元</li>
						</ul>
					</div>
				</div>
			</div>
			<!--提交-->
			<div class="search-content-box">
				<div class="tijiao-title">我想了解更加全面的楼盘信息</div>
				<div class="content-search">
					<div class="form-box">
						<span class="span-text"></span>
						<span class="span-submit"><span></span>免费咨询</span>
						<form class="input-box" action="">
							<input type="text" class="input-text" placeholder="请输入您的手机号" value="请输入您的手机号"/>
							<input type="submit" class="input-submit" value="免费咨询"/>
						</form>
					</div>
					<p class="content-tel">或咨询我们：<span class="dense-phone">400-8650-777</span></p>
				</div>
			</div>
			<!--项目简介-->
			<a class="loupan-title" name="jianjie"><span>您可能感兴趣的楼盘</span></a>
			<ul class="tuijian-list">
				<?php if(is_array($hot_house_info)): $i = 0; $__LIST__ = $hot_house_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><li class="tuijian-li">
						<a class="tuijian-img" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>"><img class="fineimg" src="/Upload/lpimg/<?php echo ($o["image"]); ?>" alt="" /></a>
						<a class="tuijian-title" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>"><?php echo ($o["house_name"]); ?></a>
						<p class="tuijian-xinxi">均价：<span><?php echo ($o["junjia"]); ?>元/㎡</span></p>
						<p class="tuijian-xinxi">户型：<span><?php echo ($o["mix_mianji"]); ?>㎡-<?php echo ($o["max_mianji"]); ?>㎡</span></p>
						<p class="tuijian-xinxi">首付：<span><?php echo ($o["shoufu"]); ?>起</span></p>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>

		<script type="text/javascript" src="/Public/home/js/tongyong.js"></script>
		<script type="text/javascript" src="/Public/home/js/loupan.js"></script>
		<script type="text/javascript" src="/Public/home/js/map.js"></script>
		<script type="text/javascript" src="/Public/home/js/jisuan.js"></script>
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