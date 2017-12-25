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

      
		<link rel="stylesheet" type="text/css" href="/Public/home/css/search.css"/>
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
		<div class="center">
			<div id="address"><i></i><a class="" href="index.html">99新房></a>楼盘查询</div>
			<div class="title-index">为您筛选<span>/专业团队为您挑选优质房源</span></div>
			<div class="youshi"><img src="/Public/home/img/youshi-bj.jpg" alt="" /></div>
			<div class="shaixuan-title">全部楼盘</div>
			<form id="shaixuan" action="/index.php/Search/search" method="get">
				<ul class="shaixuan-list shaixuan-quyu">
					<div class="radio-head">楼盘区域：</div>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img0" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity0" checked="checked" type="radio" value="0" name="city"/><span class="radio-span0">不限</span></div>
					</li>
                                        <?php if(is_array($city_list)): $i = 0; $__LIST__ = $city_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<div class="radio-img"><img class="radio-imgs radio-img0" src="/Public/home/img/radio.png" alt=""/></div>
                                                <div class="radio-box"><input class="radio-opcity radio-opcity0" type="radio" value="<?php echo ($vo["region_id"]); ?>" name="city" <?php if($vo["region_id"] == $_GET['city'] ): ?>checked="checked"<?php endif; ?>/><span class="radio-span0"><?php echo ($vo["region_name"]); ?></span></div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>                                        


				</ul>
				<ul class="shaixuan-city">
					<li class="shaixuan-list-one">
						<div class="radio-img radio-img-6" style="background:#c73619;"></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity-6" checked="checked" type="radio" value="0" name="price"/><span class="radio-span6">不限</span></div>
					</li>
                                        <?php if(is_array($next_city_list)): $i = 0; $__LIST__ = $next_city_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<div class="radio-img radio-div radio-img-6"></div>
                                                <div class="radio-box"><input class="radio-opcity radio-opcity-6" type="radio" value="<?php echo ($vo["region_id"]); ?>" name="next_city" <?php if($vo["region_id"] == $_GET['next_city'] ): ?>checked="checked"<?php endif; ?>/><span class="radio-span6"><?php echo ($vo["region_name"]); ?></span></div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">楼盘价格：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" checked="checked" type="radio" value="0" name="price"/><span class="radio-span1">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" value="1" name="price"/><span class="radio-span1">40万以下</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" value="2" name="price"/><span class="radio-span1">40万-55万</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" value="3" name="price"/><span class="radio-span1">55万-70万</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" value="4" name="price"/><span class="radio-span1">70万-85万</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img1" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity1" type="radio" value="5" name="price"/><span class="radio-span1">100万以上</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">楼盘类型：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" checked="checked" value="0" name="lx"/><span class="radio-span2">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" value="1" name="lx"/><span class="radio-span2">普通住宅</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" value="2" name="lx"/><span class="radio-span2">公寓</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" value="3" name="lx"/><span class="radio-span2">洋房</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" value="4" name="lx"/><span class="radio-span2">别墅</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img2" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity2" type="radio" value="5" name="lx"/><span class="radio-span2">商铺</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">面积范围：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" checked="checked" value="0" name="mj"/><span class="radio-span3">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" value="1" name="mj"/><span class="radio-span3">60㎡以下</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" value="2" name="mj"/><span class="radio-span3">60㎡-90㎡</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" value="3" name="mj"/><span class="radio-span3">90㎡-120㎡</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" value="4" name="mj"/><span class="radio-span3">120㎡-150㎡</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img3" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity3" type="radio" value="5" name="mj"/><span class="radio-span3">150㎡以上</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">销售类型：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img4" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity4" type="radio" checked="checked" value="0" name="xs"/><span class="radio-span4">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img4" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity4" type="radio" value="1" name="xs"/><span class="radio-span4">在售</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img4" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity4" type="radio" value="2" name="xs"/><span class="radio-span4">待售</span></div>
					</li>
				</ul>
				<ul class="shaixuan-list">
					<div class="radio-head">建筑类型：</div>
					<li class="shaixuan-list-one">
						<div class="radio-img"><img class="radio-imgs radio-img5" src="/Public/home/img/radios.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity5" type="radio" checked="checked" value="0" name="jz"/><span class="radio-span5">不限</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img5" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity5" type="radio" value="1" name="jz"/><span class="radio-span5">现房</span></div>
					</li>
					<li>
						<div class="radio-img"><img class="radio-imgs radio-img5" src="/Public/home/img/radio.png" alt=""/></div>
						<div class="radio-box"><input class="radio-opcity radio-opcity5" type="radio" value="2" name="jz"/><span class="radio-span5">期房</span></div>
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
			<div class="title-index">所有楼盘<span>/总有一款适合您</span></div>
			<!--排序控制-->
			<ul id="paixu">
				<p class="paixu-title">排序：</p>
				<p class="paixu-inherit">默认</p>
				<li class="paixu-tag">总价<img class="paixu-arrow" src="/Public/home/img/jiang.png" alt="" /></li>
				<li class="paixu-tag">单价<img class="paixu-arrow" src="/Public/home/img/jiang.png" alt="" /></li>
				<li class="paixu-tag">面积<img class="paixu-arrow" src="/Public/home/img/jiang.png" alt="" /></li>
				<li class="paixu-tag">最新<img class="paixu-arrow" src="/Public/home/img/jiang.png" alt="" /></li>
			</ul>	
			<!--搜索展现列表-->
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="zhanxian">
					<div class="zhanxian-list">
						<a class="zhanxian-left" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>" target="_blank"><img class="zhanxianimg" src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" /></a>
						<div class="zhanxian-right">
							<a class="zhanxian-title" href="" target="_blank"><?php echo ($vo["house_name"]); ?></a>
							<p class="zhanxian-xinxi">参考总价：<span>现房50% 期房40%</span></p>
							<p class="zhanxian-xinxi">户型：<span><?php echo ($vo["mix_mianji"]); ?>㎡-<?php echo ($vo["max_mianji"]); ?>㎡</span></p>
							<p class="zhanxian-xinxi">首付：<span>现房50% 期房40%</span></p>
							<p class="zhanxian-xinxi">地址：<span><?php echo ($vo["dili"]); ?></span></p>
							<ul class="zhanxian-tag"><li>产权<?php echo ($vo["property_right"]); ?>年</li><li><?php echo ($vo["xiaoshou_zt"]); ?></li><li><?php echo ($vo["decorate"]); ?></li><li>旅游地产</li></ul>
							<div class="zhanxian-jiage">价格：<span><?php echo ($vo["junjia"]); ?>元/㎡</span></div>
							<div class="zixun" onclick="doyoo.util.openChat('g=10059322');return false;">联系客服</div>
						</div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>

			<?php echo ($page); ?>
			
<!-- 			<div class="title-index">您可能感兴趣的楼盘</div>
			<ul class="tuijian-list">
			<?php if(is_array($list_house_info)): $i = 0; $__LIST__ = $list_house_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="tuijian-li">
					<a class="tuijian-img" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>" target="_blank"><img class="fineimg" src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" /></a>
					<a class="tuijian-title" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>"><?php echo ($vo["house_name"]); ?></a>
					<p class="tuijian-xinxi">均价：<span><?php echo ($vo["junjia"]); ?></span></p>
					<p class="tuijian-xinxi">户型：<span><?php echo ($vo["mix_mianji"]); ?>-<?php echo ($vo["max_mianji"]); ?></span></p>
					<p class="tuijian-xinxi">首付：<span><?php echo ($vo["shoufu"]); ?>起</span></p>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul> -->
		</div>
		<script  type="text/javascript" src="/Public/home/js/tongyong.js"></script>
		<script  type="text/javascript" src="/Public/home/js/banner.js"></script>
		<script type="text/javascript" src="/Public/home/js/search.js"></script>
		<script type="text/javascript" src="/Public/home/js/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20001185/10056872.js"></script>
                <script>
                    $('.radio-box').click(function(){
//                        var data=$('#shaixuan').serializeArray()                       
                        $('#shaixuan').submit()
//                        $.ajax({
//                            type: "POST",
//                            url: "/index.php/Search/search",
//                            data: data,
//                            success:function(data){
//                                
//                            }
//                         })
                    })
                </script>



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