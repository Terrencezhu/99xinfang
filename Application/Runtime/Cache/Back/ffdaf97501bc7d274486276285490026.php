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
				<div class="admin-title">楼盘资讯>添加文章</div>
				<form action="">
					<ul class="xinxi">
						<li><span class="letter-2">标</span>题：<input type="text" /></li>
						<li>发布时间：<input type="date" /></li>
						<div style="clear: both;"></div>
						<div class="xinxi-txt"><span>文章内容：</span><textarea name="" rows="" cols=""></textarea></div>
						<div style="clear: both;"></div>
						<div class="xinxi-file"><span>文章配图：</span>
							<div class="file-box">
								<input type="file" class="xinxi-files"/>
								<div class="xinxi-file-img"><img src="/Public/houtaiimg/file.jpg" alt="" /></div>
							</div>
						</div>
					</ul>
					<input type="submit" onclick="nulls()" name="button" id="button" value="提交" />
				</form>
			</div>
		</div>
		<script type="text/javascript">
			//判断inputs是否为空
			 var inputs=$("input");
			 function nulls(){
			 	for(var g=0;g<inputs.length;g++){
			 		if(inputs[g].value.length==0){
			 			alert("还有未输入的选项");
			 			return;
			 		}
			 	}
			 }
		</script>


  </body>
</html>