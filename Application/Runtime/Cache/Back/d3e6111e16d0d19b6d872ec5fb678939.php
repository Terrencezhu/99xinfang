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
		<meta charset="UTF-8">
		<title>99新房管理系统</title>
		<link rel="stylesheet" type="text/css" href="/Public/houtaiimg/adminstyle.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/houtaiimg/page.css" />
		<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.6.4/jquery.js"></script>
		<script type="text/javascript" src="/Public/houtaiimg/admin.js"></script>
	</head>

  <body class="common-back">

      <header>
			<ul class="right-head">
				<img src="/Public/houtaiimg/right-head.png" alt="" />
				<li></li>
				<li id=""><a href="/back.php/Login/join"><input type="submit" value="退出" /></a></li>
				<li id=""><a href="/back.php/Login/loginout"><input type="submit" value="注销" /></a></li>
			</ul>
</header>

      
		<div id="left">
			<div id="logo"><img src="/Public/houtaiimg/logo.jpg" alt="" /></div>
			<ul id="admin-img">
				<li><img src="/Public/houtaiimg/admin-img.png" alt="" /></li>
				<li><?php echo ($_SESSION['admin_user_info']['name']); ?></li>
			</ul>
			<!--左侧导航-->
			<ul class="left-list">
				<li class="left-li"><img src="/Public/houtaiimg/list-01.png" alt="" />首页<span class="left-li-span">▶</span></li>
				<ul class="left-nav"></ul>
				<li class="left-li"><img src="/Public/houtaiimg/list-02.png" alt="" />楼盘信息<span class="left-li-span">▶</span></li>
				<div class="left-nav">
					<a class="left-nav-li" href="/back.php/Lptxt/lpadd" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>添加楼盘信息</a>
					<a class="left-nav-li" href="/back.php/Lptxt/lpimg" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>添加楼盘图片</a>
					<a class="left-nav-li" href="/back.php/Lptxt/lphxt" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>添加户型图</a>
					<a class="left-nav-li" href="/back.php/Lptxt/lpedit" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>楼盘信息修改</a>
				</div>
				<li class="left-li"><img src="/Public/houtaiimg/list-03.png" alt="" />咨询师信息<span class="left-li-span">▶</span></li>
				<div class="left-nav">
					<a class="left-nav-li" href="/back.php/Kftxt/kfadd" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>添加信息</a>
					<a class="left-nav-li" href="/back.php/Kftxt/kfedit" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>信息修改</a>
				</div>
				<li class="left-li"><img src="/Public/houtaiimg/list-04.png" alt="" />客户管理<span class="left-li-span">▶</span></li>
				<div class="left-nav">
					<a class="left-nav-li" href="/back.php/Khtxt/index" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>客户信息</a>
				</div>
				<li class="left-li"><img src="/Public/houtaiimg/list-05.png" alt="" />楼盘资讯<span class="left-li-span">▶</span></li>
				<div class="left-nav">
					<a class="left-nav-li" href="/back.php/Mestxt/mesadd" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>添加文章</a>
					<a class="left-nav-li" href="/back.php/Mestxt/mesedit" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>文章编辑</a>
				</div>
				<li class="left-li"><img src="/Public/houtaiimg/list-06.png" alt="" />账号管理<span class="left-li-span">▶</span></li>
				<div class="left-nav">
					<a class="left-nav-li" href="/back.php/User/index" style="background:url(/Public/houtaiimg/left-li.jpg) no-repeat"><span>•</span>账户信息</a>
				</div>
			</ul>
		</div>


      
		<div id="right">
			<div class="right-list">
				<div class="admin-title">楼盘区域>楼盘信息修改</div>
				<form id="loupan-sousuo" action="">
					<div class="sousuo">
						楼盘名称：<input type="text" />
						<input type="submit" name="" id="" value="搜索" />
					</div>
					<div class="sousuo-body">
						<div></div>
					</div>
				</form>
				<div class="admin-title">全部楼盘</div>
				<ul class="xiugai-nav">
					<li style="background: #c73619;color:#fff;">楼盘列表</li>
					
				</ul>
				<div class="xiugai-list" style="display: block;">
					<div class="xiugai-fenye">
						<ul class="xiugai-list-title">
							<li>楼盘名称</li>
							<li>区域</li>
							<li>面积</li>
							<li>价格</li>
							<li>总价</li>
							<li>操作</li>
						</ul>
					<?php if(is_array($house_list)): $i = 0; $__LIST__ = $house_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul class="xiugai-body">
							<li><?php echo ($vo["house_name"]); ?></li>
							<li><?php echo ($vo["dili"]); ?></li>
							<li><?php echo ($vo["mix_mianji"]); ?>-<?php echo ($vo["max_mianji"]); ?></li>
							<li><?php echo ($vo["junjia"]); ?></li>
							<li><?php echo ($vo["mix_price"]); ?>-<?php echo ($vo["max_price"]); ?></li>
							<li>
								<div class="xiugai-alter"><img src="/Public/houtaiimg/xiugai-alter.png" alt="" /></div>
								<div class="xiugai-del"><img src="/Public/houtaiimg/xiugai-del.png" alt="" /></div>
							</li>
						</ul><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					
						<?php echo ($page); ?>
					
				</div>
				<div class="xiugai-list">
					<form action="">
						<div class="sousuo">
							楼盘名称：<input type="text" />
							<div class="sousuo-img"><img src="/Public/houtaiimg/sousuo.png" alt="" /></div>
						</div>
						<div class="sousuo-body">
							<div></div>
						</div>
					</form>
				</div>
				<div class="xiugai-list"></div>
			</div>
		</div>
		<script type="text/javascript">
			var xiugai_nav_li=$(".xiugai-nav li");
			var xiugai_list=$(".xiugai-list");
			for(var i=0;i<2;i++){
				xiugai_nav_li[i].onclick=function(){
					for (var j=0;j<2;j++){
						if(this==xiugai_nav_li[j]){
							xiugai_nav_li[j].style.background="#c73619";
							xiugai_nav_li[j].style.color="#fff"
							xiugai_list[j].style.display="block";
						}else{
							xiugai_nav_li[j].style.background="";
							xiugai_nav_li[j].style.color="";
							xiugai_list[j].style.display="";
						}
					}
				}
			}
		</script>


  </body>
</html>