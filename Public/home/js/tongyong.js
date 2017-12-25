//IE低版本getElementsByClassName兼容
if (!document.getElementsByClassName){
    document.getElementsByClassName = function (className, element) {
        var children = (element || document).getElementsByTagName('*');
        var elements = new Array();
        for (var i = 0; i < children.length; i++) {
            var child = children[i];
            var classNames = child.className.split(' ');
            for (var j = 0; j < classNames.length; j++) {
                if (classNames[j] == className) {
                    elements.push(child);
                    break;
                }
            }
        }
        return elements;
    };
}
//导航菜单
var cityBox=document.getElementById("city");
var cityMenu=document.getElementById("citymenu-box");
var we=document.getElementById("we");
var drop=document.getElementById("drop");
cityBox.onmouseover=function(){      //城市选择
	cityMenu.style.display="block";
}
cityBox.onmouseout=function(){
	cityMenu.style.display="none";
}
we.onmouseover=function(){		//关于我们
	drop.style.display="block";
}
we.onmouseout=function(){
	drop.style.display="none";
}
//侧栏
var flowMenu=document.getElementsByClassName("flowmenu");
var flowLeft=document.getElementsByClassName("flow-left");
for(var i=0;i<flowLeft.length;i++){
	flowMenu[i].onmouseover=function(){			//侧栏鼠标移入效果
		for(var j=0;j<flowLeft.length;j++){
			if(this==flowMenu[j]){
				flowLeft[j].style.display="block";
				flowMenu[j].style.background="#fff"
			}else{
				flowLeft[j].style.display="none";
				flowMenu[j].style.background="";
			}
		}
	}
	flowMenu[i].onmouseout=function(){     //侧栏鼠标移出效果
		for(var j=0;j<flowLeft.length;j++){
			if(this==flowMenu[j]){
				flowLeft[j].style.display="none";
				flowMenu[j].style.background="";
			}
		}
	}
}
//侧栏菜单点击左移动
var flowBox=document.getElementById("flow-box");
var flowMenu3=document.getElementById("flowmenu3");
var flowMenu4=document.getElementById("flowmenu4");
var flowTH=document.getElementById("flow_th");
flowMenu3.onclick=function(){			//免费电话
	if(flowBox.style.right==0){
		flowBox.style.right=255+"px";
		flowTH.value="免费电话";
	}else if(flowBox.style.right==(255+"px")&&flowTH.value=="预约看房"){
		flowTH.value="免费电话";
	}else{
		flowBox.style.right="";
	}
}
flowMenu4.onclick=function(){			//预约看房
	if(flowBox.style.right==0){
		flowBox.style.right=255+"px";
		flowTH.value="预约看房";
	}else if(flowBox.style.right==(255+"px")&&flowTH.value=="免费电话"){
		flowTH.value="预约看房";
	}else{
		flowBox.style.right="";
	}
}
//侧栏隐藏
//var bBox=document.getElementsByClassName("ceyin")
//function ceYin(yincang){
//	for(var i=0;i<bBox.length;i++){
//		bBox[i].onclick=function(){
//			flowBox.style.right=0;
//		}
//	}
//}
//ceYin();
//侧栏输入框焦点
var flowName=document.getElementById("flow_name");
var flowPhone=document.getElementById("flow_phone");
var flowArray=["请输入您的称呼","请输入您的手机号"]
function inputText(inputName,inputM){    //input获取失去焦点函数
	inputName.onfocus=function(){
		if(inputName.value==inputM){
			inputName.value="";
			inputName.style.color="#333";
		}
	}
	inputName.onblur=function(){
		if(inputName.value==""){
			inputName.value=inputM;
			inputName.style.color="#999";
		}
	}
}
inputText(flowName,flowArray[0]);
inputText(flowPhone,flowArray[1]);
//侧栏回到顶部
var obtn = document.getElementById('btn');  //获取回到顶部按钮的ID
var clientHeight = document.documentElement.clientHeight;   //获取可视区域的高度
var timer = null; //定义一个定时器
var isTop = true; //定义一个布尔值，用于判断是否到达顶部
window.onscroll = function(){         //滚动条滚动事件
    //获取滚动条的滚动高度
    var osTop = document.documentElement.scrollTop || document.body.scrollTop; 
    //主要用于判断当 点击回到顶部按钮后 滚动条在回滚过程中，若手动滚动滚动条，则清除定时器
    if(!isTop){
        clearInterval(timer);
    }
    isTop = false;
}
obtn.onclick = function(){    //回到顶部按钮点击事件
    //设置一个定时器
    timer = setInterval(function(){
        //获取滚动条的滚动高度
        var osTop = document.documentElement.scrollTop || document.body.scrollTop;
        //用于设置速度差，产生缓动的效果
        var speed = Math.floor(-osTop / 6);
        document.documentElement.scrollTop = document.body.scrollTop = osTop + speed;
        isTop =true;  //用于阻止滚动事件清除定时器
        if(osTop == 0){
            clearInterval(timer);
        }
    },30);
}
//底部区域切换
var footerTag=document.getElementsByClassName("footer-tag");
var footerLou=document.getElementsByClassName("footer-loupan");
for(var i=0;i<footerTag.length;i++){
	footerTag[i].onmouseover=function(){     //鼠标移入区域切换项目
		for(var j=0;j<footerTag.length;j++){
			if(this==footerTag[j]){
				footerLou[j].style.display="block";
			}else{
				footerLou[j].style.display="none";
			}
		}
	}
}
//鼠标移入图片放大效果
function fine(fineImg){
	for(var i=0;i<fineImg.length;i++){
		fineImg[i].onmousemove=function(){
			for(var j=0;j<fineImg.length;j++){
				if(this==fineImg[j]){
					fineImg[j].style.width="103%";
					fineImg[j].style.height="103%";
					fineImg[j].style.top="-3%";
					fineImg[j].style.left="-3%";
				}
			}
		}
		fineImg[i].onmouseout=function(){
			for(var j=0;j<fineImg.length;j++){
				if(this==fineImg[j]){
					fineImg[j].style.width="";
					fineImg[j].style.height="";
					fineImg[j].style.top="";
					fineImg[j].style.left="";
				}
			}
		}
	}
}
/*去除默认*/
function preDefault(e){
    var e=e||window.event;
    if (e.preventDefault) {
      e.preventDefault();
    }else {
      window.event.returnValue = false; 
    }
}
document.ondragover=function(e){
	 preDefault(e);
}
document.ondrop = function(e){
    preDefault(e);
}







