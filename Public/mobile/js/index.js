window.onload = function() {
	//为您优选
	var swiper = new Swiper('#tag', {
	    slidesPerView: 2.5,
	    slidesPerGroup : 1,
	    slidesOffsetBefore : 20,
	    spaceBetween: 20,
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
	//顶部搜索
	var inputSelect=document.getElementById("head-quyu");
	var inputMenu=document.getElementById("sousuo-menu");
	var inputArrow=document.getElementById("sousuo-arrow");
	var headPD=0;//定义变量判;断
	inputSelect.onclick=function(){//点击区域效果
	 	if(headPD==0){
	 		inputMenu.style.display="block";
	 		headPD=1;
	 	}else{
	 		inputMenu.style.display="none";
	 		headPD=0;
	 	}
	}
	var sousuoCity=document.getElementsByClassName("sousuo-city");
	var quyuText=document.getElementById("quyu-text");
	for(var i=0;i<sousuoCity.length;i++){
		sousuoCity[i].onclick=function(){
			quyuText.innerText=this.innerText;
			inputMenu.style.display="none";
	 		headPD=0;
		}
	}
	//底部切换
	var footerNav=document.getElementsByClassName("footer-menu");
	var footerList=document.getElementsByClassName("footer-list");
	footerList[1].style.display="none";
	//alert(inputSelect.length)
	for(var i=0;i<footerNav.length;i++){
		footerNav[i].onclick=function(){
			for(var j=0;j<footerNav.length;j++){
				if(this==footerNav[j]){
					footerNav[j].style.color="#fff";
					footerList[j].style.display="block";
				}else{
					footerNav[j].style.color="#4c4c4c";
					footerList[j].style.display="none";
				}
			}
		}
	}
	
}






