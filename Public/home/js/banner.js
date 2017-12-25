//banner滚动
	var bannerImg=document.getElementsByClassName("banner-img");//获取图片
	var bannerLeft=document.getElementById("banner-left");//左箭头区域
	var bannerRight=document.getElementById("banner-right");//右箭头区域
	var bannerNumLi=document.getElementsByClassName("banner-num-li");
	bannerNumLi[0].style.backgroundColor="#e14122";
	var imgNum=0;
	var bannerTime=0;
	function bannerD(){     //循环播放
		imgNum++;
		if(imgNum>=bannerImg.length){
			imgNum=0;
		}
		for(var i=0;i<bannerImg.length;i++){
			bannerImg[i].style.display="none";
			bannerNumLi[i].style.backgroundColor="";
		}
		bannerImg[imgNum].style.display="block";
		bannerNumLi[imgNum].style.backgroundColor="#e14122";
	}
	bannerTime=setInterval(bannerD,5000);//开始循环
	var bannerLImg=bannerLeft.getElementsByTagName("div")[0];
	var bannerRImg=bannerRight.getElementsByTagName("div")[0];
	bannerLeft.onmouseover=function (){   //左箭头移入显示
		 bannerLImg.style.display="block";
		 bannerRImg.style.display="block";
	}
	bannerLeft.onmouseout=function (){
		 bannerLImg.style.display="";
		 bannerRImg.style.display="";
	}
	bannerRight.onmouseover=function (){  //右箭头移入显示
		 bannerLImg.style.display="block";
		 bannerRImg.style.display="block";
	}
	bannerRight.onmouseout=function (){
		 bannerLImg.style.display="";
		 bannerRImg.style.display="";
	}
	function bannerR(){      //右箭头点击
		clearInterval(bannerTime);//停止循环
		imgNum++;
		if(imgNum>=bannerImg.length){
			imgNum=0;
		}
		for(var i=0;i<bannerImg.length;i++){
			bannerImg[i].style.display="none";
			bannerNumLi[i].style.backgroundColor="";
		}
		bannerImg[imgNum].style.display="block";
		bannerNumLi[imgNum].style.backgroundColor="#e14122";
		bannerTime=setInterval(bannerD,5000);//重新循环
	}
	function bannerL(){    //左箭头点击
		clearInterval(bannerTime);//停止循环
		imgNum--;
		if(imgNum<0){
			imgNum=bannerImg.length-1;
		}
		for(var i=0;i<bannerImg.length;i++){
			bannerImg[i].style.display="none";
			bannerNumLi[i].style.backgroundColor="";
		}
		bannerImg[imgNum].style.display="block";
		bannerNumLi[imgNum].style.backgroundColor="#e14122";
		bannerTime=setInterval(bannerD,5000);//重新循环
	}
	for(var i=0;i<bannerNumLi.length;i++){   //底部圆点切换
		bannerNumLi[i].onclick=function(){
			clearInterval(bannerTime);
			for(var j=0;j<bannerNumLi.length;j++){
				if(this==bannerNumLi[j]){
					bannerImg[j].style.display="block";
					bannerNumLi[j].style.backgroundColor="#e14122";
					imgNum=j;
				}else{
					bannerImg[j].style.display="none";
					bannerNumLi[j].style.backgroundColor="";
				}
			}
			bannerTime=setInterval(bannerD,5000);
		}
	}
	