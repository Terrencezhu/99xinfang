//radio选择时更换按钮图片
function radios(){
	var radioImg0=document.getElementsByClassName("radio-img0");
	var radioOpcity0=document.getElementsByClassName("radio-opcity0");
	var radioSpan0=document.getElementsByClassName("radio-span0");
	var radioImg1=document.getElementsByClassName("radio-img1");
	var radioOpcity1=document.getElementsByClassName("radio-opcity1");
	var radioSpan1=document.getElementsByClassName("radio-span1");
	var radioImg2=document.getElementsByClassName("radio-img2");
	var radioOpcity2=document.getElementsByClassName("radio-opcity2");
	var radioSpan2=document.getElementsByClassName("radio-span2");
	var radioImg3=document.getElementsByClassName("radio-img3");
	var radioOpcity3=document.getElementsByClassName("radio-opcity3");
	var radioSpan3=document.getElementsByClassName("radio-span3");
	var radioImg4=document.getElementsByClassName("radio-img4");
	var radioOpcity4=document.getElementsByClassName("radio-opcity4");
	var radioSpan4=document.getElementsByClassName("radio-span4");
	var radioImg5=document.getElementsByClassName("radio-img5");
	var radioOpcity5=document.getElementsByClassName("radio-opcity5");
	var radioSpan5=document.getElementsByClassName("radio-span5");
	function radioTab(a,b,c){
		for(var i=0;i<a.length;i++){
			b[i].onclick=function(){
				for(var j=0;j<a.length;j++){
					if(this==b[j]){
                                                console.log("d")
						a[j].src="/99xinfang/Public/home/img/radios.png";
						c[j].style.color="#e14122"
					}else{
						a[j].src="/99xinfang/Public/home/img/radio.png";
						c[j].style.color="#333"
					}
				}
			}
		}
	}
	radioTab(radioImg0,radioOpcity0,radioSpan0);
	radioTab(radioImg1,radioOpcity1,radioSpan1);
	radioTab(radioImg2,radioOpcity2,radioSpan2);
	radioTab(radioImg3,radioOpcity3,radioSpan3);
	radioTab(radioImg4,radioOpcity4,radioSpan4);
	radioTab(radioImg5,radioOpcity5,radioSpan5);
	function radioCity(a,b,c){
		for(var i=0;i<a.length;i++){
			b[i].onclick=function(){
				for(var j=0;j<a.length;j++){
					if(this==b[j]){
						a[j].src="/99xinfang/Public/home/img/radios.png";
						c[j].style.color="#e14122"
					}else{
						a[j].src="/99xinfang/Public/home/img/radios.png";
						c[j].style.color="#333"
					}
				}
			}
		}
	}
	var radioOpcity6=document.getElementsByClassName("radio-opcity-6");
	var radioImg6=document.getElementsByClassName("radio-img-6");
	var radioSpan6=document.getElementsByClassName("radio-span6");
	for(var i=0;i<radioImg6.length;i++){
		radioOpcity6[i].onclick=function(){
			for(var j=0;j<radioImg6.length;j++){
				if(this==radioOpcity6[j]){
					radioImg6[j].style.background="#e14122";
					radioSpan6[j].style.color="#e14122"
				}else{
					radioImg6[j].style.background="#e2e1e0";
					radioSpan6[j].style.color="#333"
				}
			}
		}
	}
}
radios();
//input获取焦点触发
var searchName=document.getElementById("search-name");
var searchPhone=document.getElementById("search-phone");
var searchInput=document.getElementsByClassName("input-text");
var inputArray=["请输入姓名","请输入手机号","请输入关键字（楼盘名/地名/开发商等）","请输入手机号"];
inputText(searchName,inputArray[0]);
inputText(searchPhone,inputArray[1]);
inputText(searchInput[0],inputArray[2]);
inputText(searchInput[1],inputArray[3]);
//排序
var paixuTag=document.getElementsByClassName("paixu-tag");
var paixuArrow=document.getElementsByClassName("paixu-arrow");
var paixuInherit=document.getElementsByClassName("paixu-inherit");
for(var i=0;i<paixuTag.length;i++){    //点击更换箭头和背景
	paixuTag[i].onclick=function(){
		for(var j=0;j<paixuTag.length;j++){
			if(this==paixuTag[j]){
				paixuTag[j].style.background="#fff";
				paixuArrow[j].src="img/sheng.png";
			}else{
				paixuTag[j].style.background="";
				paixuArrow[j].src="img/jiang.png";
				paixuInherit[0].style.background="#fdf0ee";
				paixuInherit[0].style.borderColor="#fdf0ee";
			}
		}
	}
}
paixuInherit[0].onclick=function(){
	paixuInherit[0].style.background="#fff";
	paixuInherit[0].style.borderColor="#e2e1e0";
	for(var j=0;j<paixuTag.length;j++){
		paixuTag[j].style.background="#fdf0ee";
		paixuArrow[j].src="img/jiang.png";	
	}
}
//底部推荐
var bottomFineImg=document.getElementsByClassName("fineimg");
var zhanxianImg=document.getElementsByClassName("zhanxianimg");
fine(zhanxianImg);
fine(bottomFineImg);








