var hezuoBack=document.getElementById("hezuo-background");
var hezuoFixed=document.getElementById("hezuo-fixed");
var fixedGuanbi=document.getElementById("img-guanbi");
var hezuoButton=document.getElementById("hezuo-button");
hezuoButton.onclick=function(){//点击提交出现
	hezuoBack.style.display="block";
	hezuoFixed.style.display="block";
}
fixedGuanbi.onclick=function(){//点击提交隐藏
	hezuoBack.style.display="none";
	hezuoFixed.style.display="none";
}
//input焦点
var hezuoInput=document.getElementsByClassName("hezuo-input");
var hezuoArray=["姓名","联系方式","城市"]
inputText(hezuoInput[0],hezuoArray[0]);
inputText(hezuoInput[1],hezuoArray[1]);
inputText(hezuoInput[2],hezuoArray[2]);