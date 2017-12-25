//提交验证，焦点
var newsQuyu=document.getElementById("news-quyu");
var newsYusuan=document.getElementById("news-yusuan");
var newsName=document.getElementById("news-name");
var newsPhone=document.getElementById("news-phone");
var newsText=document.getElementById("news-sousuo-text");
var newsArray=["您想在哪里买房？","您的购房预算？","请输入您的姓名：","请输入您的手机号码："]
var inputShuRu=document.getElementsByClassName("input-text");
inputText(newsQuyu,newsArray[0]);
inputText(newsYusuan,newsArray[1]);
inputText(newsName,newsArray[2]);
inputText(newsPhone,newsArray[3]);
//底部推荐
var bottomFineImg=document.getElementsByClassName("fineimg");
fine(bottomFineImg);