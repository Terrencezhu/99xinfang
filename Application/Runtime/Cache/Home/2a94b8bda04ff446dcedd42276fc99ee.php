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

      
		<link rel="stylesheet" href="/Public/home/css/index.css"/>
		<!--banner大图-->
		<div id="banner">
			<div class="sousuo-box">
				<div id="indexb-title">
					<img src="/Public/home/img/indexb-title.png" alt="" />
				</div>
				<form id="sousuo" action="/index.php/Search/search" method="get">
					<input type="text" name="guanjianzi" id="sousuo-text" placeholder="在此输入区域，小区，快速为您搜索合适的房源" value="" />
					<input type="submit" name="" id="sousuo-submit" value="开始找房" />
				</form>
				<div class="sousuo-tuijian">
					<a style="border:none;padding:0;">热门搜索：</a>
					<a href="" target="_blank">落户房</a>
					<a href="" target="_blank">随时看房</a>
					<a href="" target="_blank">海景房</a>
					<a href="" target="_blank">经济住房</a>
					<div id="banner-tel"><i></i>官方热线：<span class="dense-phone">400-8792-777</span>
					</div>
				</div>
			</div>
			<div id="index-banner" class="banner-box">
				<div class="banner-img" style="display: block;"><img src="/Public/home/img/banner01.jpg" alt="" /></div>
			</div>
		</div>
		<!--主题内容-->
		<div class="title-index">99新房的平台优势<span>四年积累  厚积薄发</span></div>
		<ul id="merit-tag">
			<li>成熟的商业模式</li>
			<li>成熟的商业模式</li>
			<li>成熟的商业模式</li>
			<li>成熟的商业模式</li>
			<li>成熟的商业模式</li>
			<li style="margin-right:0;">成熟的商业模式</li>
		</ul>
		<div class="merit">
			<div class="merit-img">
				<img src="/Public/home/img/merit-01.jpg" alt="" />
			</div>
			<div class="merit-right">
				<div class="merit-title">成熟的商业模式1</div>
				<div class="merit-text">经过多年的发展，尤其是近两年公司走上正轨以来，99新房的商业模式被众多客户所认可，这种模式在全国多个城市得到了快速的验证和复制，帮助用户筛选、购买所需的房源，公司理念成为公司发展的基点。</div>
				<div class="meritl-arrow" onclick="meritLeft()"></div>
				<div class="meritr-arrow" onclick="meritRight()"></div>
			</div> 
		</div>
		<div class="merit">
			<div class="merit-img">
				<img src="/Public/home/img/merit-01.jpg" alt="" />
			</div>
			<div class="merit-right">
				<div class="merit-title">成熟的商业模式2</div>
				<div class="merit-text">经过多年的发展，尤其是近两年公司走上正轨以来，99新房的商业模式被众多客户所认可，这种模式在全国多个城市得到了快速的验证和复制，帮助用户筛选、购买所需的房源，公司理念成为公司发展的基点。</div>
				<div class="meritl-arrow" onclick="meritLeft()"></div>
				<div class="meritr-arrow" onclick="meritRight()"></div>
			</div> 
		</div>
		<div class="merit">
			<div class="merit-img">
				<img src="/Public/home/img/merit-01.jpg" alt="" />
			</div>
			<div class="merit-right">
				<div class="merit-title">成熟的商业模式3</div>
				<div class="merit-text">经过多年的发展，尤其是近两年公司走上正轨以来，99新房的商业模式被众多客户所认可，这种模式在全国多个城市得到了快速的验证和复制，帮助用户筛选、购买所需的房源，公司理念成为公司发展的基点。</div>
				<div class="meritl-arrow" onclick="meritLeft()"></div>
				<div class="meritr-arrow" onclick="meritRight()"></div>
			</div> 
		</div>
		<div class="merit">
			<div class="merit-img">
				<img src="/Public/home/img/merit-01.jpg" alt="" />
			</div>
			<div class="merit-right">
				<div class="merit-title">成熟的商业模式4</div>
				<div class="merit-text">经过多年的发展，尤其是近两年公司走上正轨以来，99新房的商业模式被众多客户所认可，这种模式在全国多个城市得到了快速的验证和复制，帮助用户筛选、购买所需的房源，公司理念成为公司发展的基点。</div>
				<div class="meritl-arrow" onclick="meritLeft()"></div>
				<div class="meritr-arrow" onclick="meritRight()"></div>
			</div> 
		</div>
		<div class="merit">
			<div class="merit-img">
				<img src="/Public/home/img/merit-01.jpg" alt="" />
			</div>
			<div class="merit-right">
				<div class="merit-title">成熟的商业模式5</div>
				<div class="merit-text">经过多年的发展，尤其是近两年公司走上正轨以来，99新房的商业模式被众多客户所认可，这种模式在全国多个城市得到了快速的验证和复制，帮助用户筛选、购买所需的房源，公司理念成为公司发展的基点。</div>
				<div class="meritl-arrow" onclick="meritLeft()"></div>
				<div class="meritr-arrow" onclick="meritRight()"></div>
			</div> 
		</div>
		<div class="merit">
			<div class="merit-img">
				<img src="/Public/home/img/merit-01.jpg" alt="" />
			</div>
			<div class="merit-right">
				<div class="merit-title">成熟的商业模式6</div>
				<div class="merit-text">经过多年的发展，尤其是近两年公司走上正轨以来，99新房的商业模式被众多客户所认可，这种模式在全国多个城市得到了快速的验证和复制，帮助用户筛选、购买所需的房源，公司理念成为公司发展的基点。</div>
				<div class="meritl-arrow" onclick="meritLeft()"></div>
				<div class="meritr-arrow" onclick="meritRight()"></div>
			</div> 
		</div>
		<!--楼盘推荐-->
		<div class="fine-box">
			<div class="title-index">99新房为您推荐<span>四年积累  厚积薄发</span></div>
			<ul class="fine">
<!-- 			<?php if(is_array($house_info)): $i = 0; $__LIST__ = $house_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="fine-margin">
					<a class="fine-img" href="/index.php/Loupan/detail" target="_blank"><img class="fine-imgs" src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" /></a>
					<a class="fine-title" href="/index.php/Loupan/detail" target="_blank"><?php echo ($vo["dili"]); ?><i></i><?php echo ($vo["house_name"]); ?></a>
					<a class="fine-xinxi" href="/index.php/Loupan/detail" target="_blank"><?php echo ($vo["mix_mianji"]); ?>~<?php echo ($vo["max_mianji"]); ?><i></i>|<i></i><?php echo ($vo["decorate"]); ?><i></i>|<i></i><?php echo ($vo["build_type"]); ?></a>
					<a class="fine-time" href="/index.php/Loupan/detail" target="_blank">交房时间：<?php echo ($vo["last_time"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?> -->
			<?php if(is_array($house_info)): $i = 0; $__LIST__ = $house_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="fine-margin">
					<a class="fine-img" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>" target="_blank"><img class="fine-imgs" src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" /></a>
					<a class="fine-title" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>" target="_blank"><?php echo ($vo["dili"]); ?><i></i><?php echo ($vo["house_name"]); ?></a>
					<a class="fine-xinxi" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>" target="_blank"><?php echo ($vo["mix_mianji"]); ?>㎡~<?php echo ($vo["max_mianji"]); ?>㎡<i></i>|<i></i><?php echo ($vo["decorate"]); ?><i></i>|<i></i><?php echo ($vo["build_type"]); ?></a>
					<a class="fine-time" href="/index.php/Loupan/detail?id=<?php echo ($vo["house_id"]); ?>" target="_blank">交房时间：<?php echo ($vo["last_time"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="title-index">99新房新闻.动态<span>最新动态  最全新闻</span></div>	
		<div id="news">
			<div id="news-left">
				<a class="news-img" href="/index.php/News/newtext" target="_blank"><img src="/Public/home/img/news-02.jpg" alt="" /></a>
				<a class="news-title" href="/index.php/News/newtext" target="_blank">
					<div class="news-titles textoverflow">新房开盘购买流程的简单介绍和说明</div>
					<div class="news-time">2017-06-09</div>
				</a>
				<div class="news-text">
					人奋斗一辈子，还不就是为了有房有家，有个落脚的地方。买房对如今很多人来说虽然有压力，但也是奋斗...<a href="/index.php/News/newtext" target="_blank">【查看详情】</a>
				</div>
			</div>
			<div id="news-right">
				<div class="news-list">
					<a class="news-title" href="/index.php/News/newtext" target="_blank">
						<div class="news-titles textoverflow">新房开盘购买流程的简单介绍和说明</div>
						<div class="news-time">2017-06-09</div>
					</a>
					<div class="news-text">
						人奋斗一辈子，还不就是为了有房有家，有个落脚的地方。买房对如今很多人来说虽然有压力，但也是奋斗的方向买房要准备和注意的事项是比较多的，那么...<a href="/index.php/News/newtext" target="_blank">【查看详情】</a>
					</div>
				</div>
				<div class="news-list">
					<a class="news-title" href="/index.php/News/newtext" target="_blank">
						<div class="news-titles textoverflow">新房开盘购买流程的简单介绍和说明</div>
						<div class="news-time">2017-06-09</div>
					</a>
					<div class="news-text">
						人奋斗一辈子，还不就是为了有房有家，有个落脚的地方。买房对如今很多人来说虽然有压力，但也是奋斗的方向买房要准备和注意的事项是比较多的，那么...<a href="/index.php/News/newtext" target="_blank">【查看详情】</a>
					</div>
				</div>
				<div class="news-list news-lists">
					<a class="news-title" href="/index.php/News/newtext" target="_blank">
						<div class="news-titles textoverflow">新房开盘购买流程的简单介绍和说明</div>
						<div class="news-time">2017-06-09</div>
					</a>
					<div class="news-text">
						人奋斗一辈子，还不就是为了有房有家，有个落脚的地方。买房对如今很多人来说虽然有压力，但也是奋斗的方向买房要准备和注意的事项是比较多的，那么...<a href="/index.php/News/newtext" target="_blank">【查看详情】</a>
					</div>
				</div>
			</div>
		</div>	
		<div class="title-index">关于99新房<span>安心买房  快捷卖房</span></div>
		<div id="touch">
			<div class="touch-list touch-lists">
				<div class="touch-img"><img src="/Public/home/img/touch-img01.png" alt="" /></div>
				<div class="touch-right">
					<div class="touch-bold">关注微信二维码</div>
					<div class="touch-conter">
						<div class="touch-weixin"><img src="/Public/home/img/weixin.jpg" alt="" /></div>
						<ul>
							<li>手机扫描二维码</li>
							<li>关注99新房公众号</li>
							<li>为您解决购房难题</li>
						</ul>
					</div>
					<div class="touch-bold">免费咨讯热线</div>
					<div class="touch-tel">400-8792-777</div>
					<div class="touch-time">工作时间：09:00~21:00（周一至周日）</div>
				</div>
			</div>
			<div class="touch-list">
				<div class="touch-img"><img src="/Public/home/img/touch-img02.png" alt="" /></div>
				<div class="touch-right">
					<div class="touch-bold touch-bolds">合作申请</div>
					<div class="touch-conter">
						<div class="touch-conter-text">2017携手99新房一起开创未来</div>
						<div id="touch-hezuo" class="touch-conter-button">立即加入</div>
					</div>
					<div class="touch-bold touch-bolds">合作热线</div>
					<div class="touch-tel">15888379654</div>
					<div class="touch-time">工作时间：09:00~21:00（周一至周日）</div>
				</div>
			</div>
		</div>
		<!--弹窗注册申请合作-->
		<div id="hezuo-background">
			<div id="img-guanbi"></div>
		</div>
		<div id="hezuo-fixed">
			<div id="hezuo-left">
				<p class="hezuo-title">在线申请合作</p>
				<p class="hezuo-title">请填写右边信息</p>
				<div style="height:40px;"></div>
				<p class="hezuo-text">提交申请后99新房招商人员会在第二个工作日</p>
				<p class="hezuo-text">与您联系</p>
				<div style="height:30px;"></div>
				<p class="hezuo-text" style="color:#e14122;">加入流程</p>
				<p class="hezuo-text">申请>约谈>签约>加入99新房</p>
				<div style="height:20px;"></div>
				<p class="hezuo-text">咨询热线：400-8972-777</p>
			</div>
			<from id="hezuo-right">
				<div class="hezuo-input-box">
					<input class="hezuo-input" type="text" name="" id="" placeholder="姓名" value="姓名" />
					<input class="hezuo-input" type="text" name="" id="" placeholder="联系方式" value="联系方式" />
				</div>
				<div class="hezuo-input-box">
					<input class="hezuo-input" type="text" name="" id="" placeholder="城市" value="城市" />
				</div>
				<textarea name="" rows="" cols="" placeholder="备注"></textarea>
				<input type="submit" name="" id="" value="申请加入"/>
			</from>
		</div>
		<!--底部小图标-->
		<div class="tol-box">
			<ul id="tol">
				<li>
					<div class="tol-img">
						<img src="/Public/home/img/tol-01.png" alt="" />
					</div>
					<div class="tol-text">房源真实  精挑细选</div>
				</li>
				<li>
					<div class="tol-img">
						<img src="/Public/home/img/tol-02.png" alt="" />
					</div>
					<div class="tol-text">一键预约  极速响应</div>
				</li>
				<li>
					<div class="tol-img">
						<img src="/Public/home/img/tol-03.png" alt="" />
					</div>
					<div class="tol-text">价格真实  拒绝黑幕</div>
				</li>
				<li>
					<div class="tol-img">
						<img src="/Public/home/img/tol-04.png" alt="" />
					</div>
					<div class="tol-text">专属经济  全程无忧</div>
				</li>
			</ul>
		</div>

		<script type="text/javascript" src="/Public/home/js/tongyong.js"></script>
		<script type="text/javascript" src="/Public/home/js/indexjs.js"></script>
		<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20001185/10056872.js"></script>
	</body>


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