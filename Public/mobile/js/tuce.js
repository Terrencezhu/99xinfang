window.onload=function(){
    /*图册切换*/
    var tuceBox=document.getElementsByClassName("tuce-box");
    var tuceTab=document.getElementsByClassName("tuce-tab");
    tuceBox[0].style.opacity="1";
    function tucetabs(a,b){
    	for(var i=0;i<a.length;i++){
			a[i].onclick=function(){			//侧栏鼠标移入效果
				for(var j=0;j<a.length;j++){
					if(this==a[j]){
						b[j].style.opacity="1";
						a[j].style.color="#f65f40";
					}else{
						b[j].style.opacity="0";
						a[j].style.color="#fff";
					}
				}
			}
		}
    }
    tucetabs(tuceTab,tuceBox)
    //图片轮播
    var swiper = new Swiper('#xiaoguo', {
        pagination: '#xiaoguo .swiper-pagination',
        paginationType: 'fraction'
    });
    var swiper = new Swiper('#yangban', {
        pagination: '#yangban .swiper-pagination',
        paginationType: 'fraction'
    });
    var swiper = new Swiper('#luxian', {
        pagination: '#luxian .swiper-pagination',
        paginationType: 'fraction'
    });
    var swiper = new Swiper('#peitao', {
        pagination: '#peitao .swiper-pagination',
        paginationType: 'fraction'
    });
    var swiper = new Swiper('#shijing', {
        pagination: '#shijing .swiper-pagination',
        paginationType: 'fraction'
    });
 	//图片数量
    var tuceNum=document.getElementsByClassName("tuce-num");
    var tuceList=document.getElementsByClassName("tuce-list");
    var tuceImg=0;
//  alert(tuceImg1.length)
    for(var i=0;i<tuceNum.length;i++){
    	tuceImg=tuceList[i].getElementsByClassName("swiper-slide");
    	tuceNum[i].innerHTML=tuceImg.length;
    }
    
    
}
























