window.onload = function() {
	//分享
	var fenXiang=document.getElementById("head-fenxiang");
	var fenXiangBox=document.getElementById("loupan-fenxiang");
	var fenXiangGB=document.getElementById("fenxiang-guanjbi");
	function block(a,b){   //调出函数
		a.onclick=function(){
			b.style.display="block";
		}
	}
	function none(a,b){  //隐藏函数
		a.onclick=function(){
			b.style.display="none";
		}
	}
	block(fenXiang,fenXiangBox);//分享
	none(fenXiangGB,fenXiangBox); //分享
	//	顶部搜索调用
	var sousuoTop=document.getElementById("sousuo-top");
	function daoHang(){
		var scrollTop= document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;//不同浏览器获取bodyscrollTop
		if(scrollTop>=700){
			sousuoTop.style.display="block";
		}else{
			sousuoTop.style.display="none";
		}
	}
	setInterval(daoHang,30)//随时判断scrollTop位置
	//通知调出
	var tongZhi=document.getElementById("loupan-tongzhi");
	var yuYue=document.getElementById("loupan-yuyue");
	var quXiao=document.getElementById("baoming-quxiao");
	var baoMing=document.getElementById("baoming");
	block(tongZhi,baoMing);
	none(quXiao,baoMing); 
	block(yuYue,baoMing);
	//户型介绍
	var swiper = new Swiper('#huxing', {
	    slidesPerView: 2.5,
	    slidesPerGroup : 1,
	    slidesOffsetBefore : 20,
	    spaceBetween: 20,
	});
	
}










