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

      
<link rel="stylesheet" type="text/css" href="/Public/home/css/newtext.css"/>
				<div class="center">
			<div id="address">
				<i></i><a href="/index.php/Index/index/">99新房></a><a href="/index.php/News/news">楼盘资讯></a>新房开盘购买流程的简单介绍和说明
				<div class="form-box">
					<span class="span-text"></span>
					<span class="span-submit"><span></span>搜索</span>
					<form class="input-box" action="">
						<input type="text" class="input-text" placeholder="更多房产知识" value="更多房产知识"/>
						<input type="submit" class="input-submit" value="搜索"/>
					</form>
				</div>
			</div>
			<div id="newtext-body">
				<div class="newtext-title">新房开盘购买流程的简单介绍和说明</div>
				<div class="newtext-date">发布时间：2017-05-2 09:41:33    阅读量：2068</div>
				<div class="newtext-bold">摘要：人奋斗一辈子，还不就是为了有房有家，有个落脚的地方。买房对如今很多人来说虽然有压力，但也是奋斗的方向，买房要准备和注意的</div>
				<p>人奋斗一辈子，还不就是为了有房有家，有个落脚的地方。买房对如今很多人来说虽然有压力，但也是奋斗的方向，买房要准备和注意的事项是比较多的，那么关于新房开盘购买流程主要有哪些呢？在购买的时候要注意的事项又有哪些呢？</p>
				<p>关于新房开盘购买流程，相对来说是比较繁杂的，对有需要购房的用户们来说应该要自己有基本的了解，本期我们就简单地介绍几个必知的事项。</p>
				<div class="newtext-img"><img src="/Public/home/img/newtext-img.jpg" alt="" /></div>
				<div class="newtext-bold">1、做好买房前的准备</div>
				<p>既然已经决定了买房，那么自然就要先考虑到，需要什么样的新房，想要在什么地段，想要什么形式等等。选购新房是比较好的，一般新房的设计比较新颖，而且质量有保障，如今新房的贷款方便，物业服务等也较为齐全。可以考虑到不同区域的新房情况以及楼盘的价格，根据自己的经济能力做一个简单的预算，看是否能够承担得了新房的价格，做好多方对比，选择到合适的地段。</p>
				<div class="newtext-bold">2、实地考察新房质量</div>
				<p>光是从图片上选择是不够的，做好实地考察工作是很重要的。实地了解新房的结构，了解开发商的五证是否合法，看看新房周围的环境、公共场所以及交通等条件，是否能够符合生活居住需求。当然如果选择的是现房，还要看看内部的环境、绿化等是否符合居住的质量要求。</p>
				<div class="newtext-bold">3、注意认购签约事项</div>
				<p>在确定了买房后合同是非常重要的，签约要注意仔细检查资格，谈判好购买的价格、付款方式以及装修标准、配套设施以及物业管理等等，尽量保障自己的利益。如果觉得对这些方面不是很了解的话，其实可以选择专业的律师来帮助审查，确保合同的法律性和效力性。</p>
				<p>关于新房开盘购买流程，这些是简单的介绍，想要了解更多买房须知，还是要根据法律知识等来进行，降低购房风险。</p>
				<p>更多有关新房开盘购买流程的问题，我们会逐一进行指导。99新房置业顾问为您解读新房购买涉及的方方面面的内容，用心祝您买好房。</p>
				<div class="newtext-next newtext-nexts"><a href="">上一篇文章：高层容积率多少合适？买了就知道。</a></div>
				<div class="newtext-next"><a href="">下一篇文章：公摊面积是怎么算的？公摊面积也可以作假？</a></div>
			</div>
			<div class="search-content-box">
				<p>还在自己查房产知识？快找专业咨询师一对一答疑解惑</p>
				<p>免费咨询电话：<span class="dense-phone">400-8650-777</span></p>
				<div class="form-box">
					<span class="span-text"></span>
					<span class="span-submit"><span></span>免费咨询</span>
					<form class="input-box" action="">
						<input type="text" class="input-text" placeholder="请输入手机号" value="请输入手机号"/>
						<input type="submit" class="input-submit" value="免费咨询"/>
					</form>
				</div>
			</div>
			<div id="newtext-list">
				<div class="newtext-list-title">相关资讯</div>
				<ul>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
				</ul>
				<ul style="border:0;">
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
					<li>
						<div class="newtext-menu"><a href="">电梯房如何选房，各个楼层的详细分析...</a></div>
						<p class="newtext-time">2017-04-26</p>
					</li>
				</ul>
			</div>
			<div id="newtext-hot">
				<div class="newtext-list-title">相关资讯</div>
				<ul class="tuijian-list">
					<li class="tuijian-li">
						<a class="tuijian-img" href="/index.php/Loupan/detail"><img class="fineimg" src="/Public/home/img/head-01.jpg" alt="" /></a>
						<a class="tuijian-title" href="/index.php/Loupan/detail">云基地</a>
						<p class="tuijian-xinxi">均价：<span>7500元/㎡</span></p>
						<p class="tuijian-xinxi">户型：<span>49㎡-104㎡</span></p>
						<p class="tuijian-xinxi">首付：<span>14万起</span></p>
					</li>
					<li class="tuijian-li">
						<a class="tuijian-img" href="/index.php/Loupan/detail"><img class="fineimg" src="/Public/home/img/head-02.jpg" alt="" /></a>
						<a class="tuijian-title" href="/index.php/Loupan/detail">文化星城</a>
						<p class="tuijian-xinxi">均价：<span>7500元/㎡</span></p>
						<p class="tuijian-xinxi">户型：<span>49㎡-104㎡</span></p>
						<p class="tuijian-xinxi">首付：<span>14万起</span></p>
					</li>
					<li class="tuijian-li">
						<a class="tuijian-img" href="/index.php/Loupan/detail"><img class="fineimg" src="/Public/home/img/head-03.jpg" alt="" /></a>
						<a class="tuijian-title" href="/index.php/Loupan/detail">恒泰•时间海</a>
						<p class="tuijian-xinxi">均价：<span>7500元/㎡</span></p>
						<p class="tuijian-xinxi">户型：<span>49㎡-104㎡</span></p>
						<p class="tuijian-xinxi">首付：<span>14万起</span></p>
					</li>
					<li>
						<a class="tuijian-img" href="/index.php/Loupan/detail"><img class="fineimg" src="/Public/home/img/head-04.jpg" alt="" /></a>
						<a class="tuijian-title" href="/index.php/Loupan/detail">御海龙湾</a>
						<p class="tuijian-xinxi">均价：<span>7500元/㎡</span></p>
						<p class="tuijian-xinxi">户型：<span>49㎡-104㎡</span></p>
						<p class="tuijian-xinxi">首付：<span>14万起</span></p>
					</li>
				</ul>
			</div>
		</div>
		
		<script type="text/javascript" src="/Public/home/js/tongyong.js"></script>
		<script type="text/javascript" src="/Public/home/js/newtext.js"></script>


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