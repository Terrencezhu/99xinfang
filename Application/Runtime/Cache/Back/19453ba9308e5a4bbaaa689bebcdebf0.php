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


      

		<!--左侧导航-->
		<div id="right">
			<!--楼盘信息-->
			<div class="right-list">
				<!--楼盘基本信息-->
				<div class="admin-title">楼盘区域</div>
				<form action="/back.php/Lptxt/lpadd" method="post">
					<ul class="quyu">
						<li>&nbsp;省
							<select name="province_id" id="province_id">
								<!-- <option value="">请选择</option> -->
								<option>请选择</option>
								<?php if(is_array($province_list)): $i = 0; $__LIST__ = $province_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$province): $mod = ($i % 2 );++$i;?><option value="<?php echo ($province["region_id"]); ?>"><?php echo ($province["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</li>
						<li>&nbsp;市
							<select name="city_id" id="city_id">
								<option>请选择</option>
							 	<?php if(is_array($city_list)): $i = 0; $__LIST__ = $city_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$city): $mod = ($i % 2 );++$i;?><option value="<?php echo ($city["region_id"]); ?>"><?php echo ($city["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
							 </select>  
						</li>
						<li>&nbsp;区
							<select name="district_id"  id="district_id">
								<option value="0">请选择</option>
								<?php if(is_array($dis_list)): $i = 0; $__LIST__ = $dis_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dis): $mod = ($i % 2 );++$i;?><option value="<?php echo ($dis["region_id"]); ?>"><?php echo ($dis["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                                              
							</select>  
						</li>
					</ul>
					<div class="admin-title">楼盘信息</div>
					<ul class="xinxi">
						<li>楼盘名称：<input type="text" name="house_name"/></li>
						<li>参考均价：<input type="text" name="junjia"/></li>
						<li>物业公司：<input type="text" name="wuye"/></li>
						<li>楼盘地址：<input type="text" name="house_address"/></li>
						<li><span class="letter-2">首</span>付：<input type="text" name="shoufu"/></li>
						<li>物业费用：<input type="text" name="wuye_price"/></li>
						<li>物业类型：<input type="text" name="wuye_type"/></li>
						<li>优惠信息：<input type="text" name="youhuixinxi"/></li>
						<li>供暖方式：<input type="text" name="gongnuan"/></li>
						<li>建筑类型：<input type="text" name="build_type"/></li>
						<li>最新开盘：<input type="date" name="first_time"/></li>
						<li>车位情况：<input type="text" name="car"/></li>
						<li><span class="letter-3">开发</span>商：<input type="text" name="developer"/></li>
						<li>最早交房：<input type="date" name="last_time"/></li>
						<li><span class="letter-3">容积</span>率：<input type="text" name="rongjilv"/></li>
						<li>地理位置：<input type="text" name="dili"/></li>
						<li>最大面积：<input type="text" name="max_mianji"/></li>
						<li>装修状况：<input type="text" name="decorate"/></li>
						<li>最低总价：<input type="text" name="mix_price"/></li>
						<li>最小面积：<input type="text" name="mix_mianji"/></li>
						<li><span class="letter-3">绿化</span>率：<input type="text" name="green"/></li>
						<li>最高总价：<input type="text" name="max_price"/></li>
						<li>产权年限：<input type="text" name="property_right"/></li>
						<li>销售状态：<input type="text" name="xiaoshou_zt"/></li>
						<li>联系电话：<input type="text" name="tel"/></li>
						<div style="clear: both;"></div>
					</ul>
						<li>楼盘信息简介：<input type="text" name="house_jianjie" style="width:800px; height:100px;"/></li>
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
			 			alert("请完善选项！");
			 			return;
			 		}
			 	}
			 }
		</script>

		<script>
			$("#province_id").change(function(){
			var province_id=$(this).val();
			$.ajax({
				url:'get_city',
				Type:"POST",
				data:"province_id="+province_id,
				dataType:"json",
				success:function(data){
					var city = data.city;
					var option=$("<option></option>");
					$(option).val("0");
					$(option).html("请选择");
					var option1=$("<option></option>");
					$(option1).val("0");
					$(option1).html("请选择");
					$("#city_id").html(option);
					$("#district_id").html(option1);
					for(var i in city){
						var option=$("<option></option>");
						$(option).val(city[i]['region_id']);
						$(option).html(city[i]['region_name']);
						$("#city_id").append(option);
						}
					}
					
				});
			});
		</script>
		<script>
			$("#city_id").change(function(){
				var city_id=$(this).val();
				$.ajax({
					url:'get_district',
					Type:"POST",
					data:"city_id="+city_id,
					dataType:"json",
					success:function(data){
					var district = data.district;
					var option=$("<option></option>");
					$(option).val("0");
					$(option).html("请选择");
					$("#district_id").html(option);
					for(var i in district){
						var option=$("<option></option>");
						$(option).val(district[i]['region_id']);
						$(option).html(district[i]['region_name']);
						$("#district_id").append(option);
						}
					}
				});
			});
	  	</script>


  </body>
</html>