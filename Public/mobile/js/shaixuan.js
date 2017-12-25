//window.onload = function(){
	//顶部筛选条件
	var shaiXuanFixed=document.getElementById("shaixuan-fixed");
	var shaiXuanNavs=document.getElementsByClassName("shaixuan-navs");//筛选条件
	var shaiXuanNav=document.getElementsByClassName("shaixuan-nav");//筛选条件
	var shaiXuanList=document.getElementsByClassName("shaixuan-list");//条件内容
//	shaiXuanList[3].style.display="block"
	for(var i=0;i<shaiXuanNavs.length;i++){    //页面筛选点击出现顶部定位筛选
		shaiXuanNavs[i].onclick=function(){
			shaiXuanFixed.style.display="block";	
			for(var j=0;j<shaiXuanNavs.length;j++){
				if(this==shaiXuanNavs[j]){
					shaiXuanNav[j].style.color="#f65f40";
					shaiXuanList[j].style.display="block";
				}else{
					shaiXuanNav[j].style.color="#333";
					shaiXuanList[j].style.display="none";
				}
			}
		}
	}
	function shaixuan(a,b){
		for(var i=0;i<a.length;i++){   //通用
			a[i].onclick=function(){
				for(var j=0;j<a.length;j++){
					if(this==a[j]){
						a[j].style.color="#f65f40";
						b[j].style.display="block";
					}else{
						a[j].style.color="#333";
						b[j].style.display="none";
					}
				}
			}
		}
	}
	function fixedSX(a,b){   //tab切换
		for(var i=0;i<a.length;i++){
			a[i].onclick=function(){
//				document.documentElement.scrollTop=document.body.scrollTop=c;
				for(var j=0;j<a.length;j++){
					if(this==a[j]){
						if(b[j].style.display=="none"){
							a[j].style.color="#f65f40";
							b[j].style.display="block";
						}else{
							a[j].style.color="#333";
							b[j].style.display="none";
							shaiXuanFixed.style.display="none";	
						}
					}else{
						a[j].style.color="#333";
						b[j].style.display="none";
					}
				}
			}
		}
	}
	fixedSX(shaiXuanNav,shaiXuanList);//筛选tab切换
	var sxListShi=document.getElementsByClassName("sxlist-shi");//
	var shaiXuanShi=sxListShi[0].getElementsByClassName("sxlist-tag");//市选项
	var sxListXian=document.getElementsByClassName("sxlist-xian");
//	var shaiXuanXian=sxListXian[0].getElementsByClassName("sxlist-tag");//县选项
//	var xianQu=document.getElementsByClassName("xianqu-list");
	shaiXuanShi[0].style.color="#f65f40";
//  xianQu[1].style.display="block";	
//	shaixuan(shaiXuanShi,xianQu);//筛选tab切换
	//选择县区隐藏
	function xuanze(a,b){   //选择隐藏
		for(var i=0;i<a.length;i++){ 
			a[i].onclick=function(){
				for(var j=0;j<a.length;j++){
					if(this==a[j]){
						a[j].style.color="#e14122";
					}else{
						a[j].style.color="";
					}
				}
			}
		}
	}
	xuanze(shaiXuanShi,shaiXuanList[0]);//区域选择隐藏列表
	//价格
	var sxListJiaGe=document.getElementsByClassName("sxlist-jiage");//单价总价选择盒子
	var jieGeTag=sxListJiaGe[0].getElementsByClassName("sxlist-tag");//单价总价标签
	var sxListDanJia=document.getElementsByClassName("sxlist-danjia");//价格盒子
	var danJiaTag=sxListDanJia[0].getElementsByClassName("sxlist-tag");//单价
	var zongjiaJiaTag=sxListDanJia[1].getElementsByClassName("sxlist-tag");//总价
	sxListDanJia[0].style.display="block";
//	alert(danJiaTag.length)
	shaixuan(jieGeTag,sxListDanJia);//单价总价切换
	xuanze(danJiaTag,shaiXuanList[1]);//单价列表点击
	xuanze(zongjiaJiaTag,shaiXuanList[1]);//总价列表点击
	//户型
	var sxListHuXing=document.getElementsByClassName("sxlist-huxing");//户型标签
	xuanze(sxListHuXing,shaiXuanList[2]);
	//更多
	var tagBox=document.getElementsByClassName("tag-box");
	var zhuFangT=tagBox[0].getElementsByClassName("zhaofang-tag");
	var zhuFangI=tagBox[0].getElementsByTagName("input");
	var xiaoShouT=tagBox[1].getElementsByClassName("zhaofang-tag");
	var xiaoShouI=tagBox[1].getElementsByTagName("input");
	var zhuanXiuT=tagBox[2].getElementsByClassName("zhaofang-tag");
	var zhuanXiuI=tagBox[2].getElementsByTagName("input");
	//alert(yuSuanO.length)
	//筛选按钮点击
	function tiaojian(a,b){
		for(var i=0;i<a.length;i++){
			a[i].onclick=function(){
				for(var j=0;j<a.length;j++){
					if(this==a[j]){
						b[j].style.color="#f65f40";
						b[j].style.borderColor="#f65f40";
					}else{
						b[j].style.color="";
						b[j].style.borderColor="";
					}
				}
			}
		}
	}
	tiaojian(zhuFangI,zhuFangT);
	tiaojian(xiaoShouI,xiaoShouT);
	tiaojian(zhuanXiuI,zhuanXiuT);
	//
	var tagChongZhi=document.getElementById("tag-chongzhi");
	tagChongZhi.onclick=function(){  //选择重置
		function tagO(a,b){
			for(var i=0;i<a.length;i++){
				a[i].checked=false;
				b[i].style.color="#333";
				b[i].style.borderColor="#eee";
			}
		}
		tagO(zhuFangI,zhuFangT);
		tagO(xiaoShouI,xiaoShouT);
		tagO(zhuanXiuI,zhuanXiuT);
	}
	
	
	
//}
  





