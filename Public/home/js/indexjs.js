//电话
//var dense_phone=document.getElementsByClassName("dense-phone");	
//for(var i=0;i<dense_phone.length;i++){
// 		dense_phone[i].innerHTML="400-8792-777";
// 	}
//平台优势切换
var meritUl=document.getElementById("merit-tag");//获取标签盒子
var meritTag=meritUl.getElementsByTagName("li");//获取标题标签
var merit=document.getElementsByClassName("merit");//获取主体
var meritLArrow=document.getElementsByClassName("meritl-arrow");//左边箭头
var meritRArrow=document.getElementsByClassName("meritr-arrow");//右边箭头
meritTag[0].style.color="#fff";   
meritTag[0].style.background="#e14122";
merit[0].style.display="block";
meritLArrow[0].style.display="none";
var meritNum=0;
for(var i=0;i<meritTag.length;i++){        //点击标签切换
	meritTag[i].onclick=function(){
		for(var j=0;j<meritTag.length;j++){
			if(this==meritTag[j]){
				meritTag[j].style.color="#fff";
				meritTag[j].style.background="#e14122";
				merit[j].style.display="block";
				if(j==0){                                //第一个标签时左边控制隐藏
					meritLArrow[j].style.display="none";
				}else{
					meritLArrow[j].style.display="block";
				}
				if(j==(meritTag.length-1)){              //最后一个标签时右边控制隐藏
					meritRArrow[j].style.display="none";
				}else{
					meritRArrow[j].style.display="block";
				}
				meritNum=j;
			}else{
				meritTag[j].style.color="";
				meritTag[j].style.background="";
				merit[j].style.display="";
			}
		}
	}
}
//右边箭头控制
function meritRight(){
	meritNum++;
	for(var k=0;k<meritTag.length;k++){
		meritTag[k].style.color="";
		meritTag[k].style.background="";
		merit[k].style.display="";
	}
	meritTag[meritNum].style.color="#fff";
	meritTag[meritNum].style.background="#e14122";
	merit[meritNum].style.display="block";
	if(meritNum==(meritTag.length-1)){      //当最后
		meritRArrow[meritNum].style.display="none";
	}
}
//左边箭头控制
function meritLeft(){
	meritNum--;
	for(var k=0;k<meritTag.length;k++){
		meritTag[k].style.color="";
		meritTag[k].style.background="";
		merit[k].style.display="";
	}
	meritTag[meritNum].style.color="#fff";
	meritTag[meritNum].style.background="#e14122";
	merit[meritNum].style.display="block";
	if(meritNum==0){
		meritLArrow[meritNum].style.display="none";
	}
}
//推荐楼盘鼠标移入效果
var fineImgs=document.getElementsByClassName("fine-imgs");		
fine(fineImgs);
//申请合作  
var hezuoBack=document.getElementById("hezuo-background");
var hezuoFixed=document.getElementById("hezuo-fixed");
var fixedGuanbi=document.getElementById("img-guanbi");
var hezuoButton=document.getElementById("touch-hezuo");
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
	
	
	


