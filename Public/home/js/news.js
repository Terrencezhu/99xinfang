//导航栏tab切换
var newsLI=document.getElementsByClassName("news-nav-li");
var newsNa=document.getElementsByClassName("news-na");
var newsList=document.getElementsByClassName("news-list-box");
function newsNav(){
	for(var i=0;i<newsLI.length;i++){
		newsLI[i].onclick=function(){
			for(var j=0;j<newsLI.length;j++){
				if(this==newsLI[j]){
					newsList[j].style.display="block";
					newsNa[j].style.color="#e14122";
					newsNa[j].style.borderBottomWidth=1+"px";
				}else{
					newsList[j].style.display="";
					newsNa[j].style.color="";
					newsNa[j].style.borderBottomWidth="";
				}
			}
		}
	}
}
newsNav();
//提交验证，焦点
var newsQuyu=document.getElementById("news-quyu");
var newsYusuan=document.getElementById("news-yusuan");
var newsName=document.getElementById("news-name");
var newsPhone=document.getElementById("news-phone");
var newsText=document.getElementById("news-sousuo-text");
var newsArray=["您想在哪里买房？","您的购房预算？","请输入您的姓名：","请输入您的手机号码：","更多房产知识"]
var inputShuRu=document.getElementsByClassName("input-text");
inputText(newsQuyu,newsArray[0]);
inputText(newsYusuan,newsArray[1]);
inputText(newsName,newsArray[2]);
inputText(newsPhone,newsArray[3]);
inputText(inputShuRu[0],newsArray[4]);
//侧栏移入移出
var ztTitle=document.getElementsByClassName("zhuanti-title");
var ztContent=document.getElementsByClassName("zhuanti-content");
function zhuanTi(){
	for(var i=0;i<ztTitle.length;i++){
		ztTitle[i].onmouseover=function(){
			for(var j=0;j<ztTitle.length;j++){
				if(this==ztTitle[j]){
					ztTitle[j].style.display="none";
					ztContent[j].style.display="block";
				}else{
					ztTitle[j].style.display="";
					ztContent[j].style.display="";
				}
			}
		}
	}
}
zhuanTi();




