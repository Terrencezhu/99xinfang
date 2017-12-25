window.onload = function(){
	//首页banner
	var mySwiper = new Swiper ('#banner', {
		pagination: '.swiper-pagination',
		effect : 'fade',
		autoplay: 5000,
		loop: true,
	});  
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

}
  





