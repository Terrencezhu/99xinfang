	//提交验证，焦点
	var newsQuyu=document.getElementById("news-quyu");
	var newsYusuan=document.getElementById("news-yusuan");
	var newsName=document.getElementById("news-name");
	var newsPhone=document.getElementById("news-phone");
	newsQuyu.onfocus=function(){
		if(newsQuyu.value=="您想在哪里买房？"){
			newsQuyu.value="";
			newsQuyu.style.color="#333";
		}
	}
	newsQuyu.onblur=function(){
		if(newsQuyu.value==""){
			newsQuyu.value="您想在哪里买房？";
			newsQuyu.style.color="#999";
		}
	}
	newsYusuan.onfocus=function(){
		if(newsYusuan.value=="您的购房预算？"){
			newsYusuan.value="";
			newsYusuan.style.color="#333";
		}
	}
	newsYusuan.onblur=function(){
		if(newsYusuan.value==""){
			newsYusuan.value="您的购房预算？";
			newsYusuan.style.color="#999";
		}
	}
	newsName.onfocus=function(){
		if(newsName.value=="请输入您的姓名："){
			newsName.value="";
			newsName.style.color="#333";
		}
	}
	newsName.onblur=function(){
		if(newsName.value==""){
			newsName.value="请输入您的姓名：";
			newsName.style.color="#999";
		}
	}
	newsPhone.onfocus=function(){
		if(newsPhone.value=="请输入您的手机号码："){
			newsPhone.value="";
			newsPhone.style.color="#333";
		}
	}
	newsPhone.onblur=function(){
		if(newsPhone.value==""){
			newsPhone.value="请输入您的手机号码：";
			newsPhone.style.color="#999";
		}
	}
	//成交带看切换
	var yeJiNav=document.getElementById("member-yeji-nav").getElementsByTagName("li");
	var xiaoQuTab=document.getElementsByClassName("member-xiaoqu-tab");
	for(var i=0;i<xiaoQuTab.length;i++){
		yeJiNav[i].onclick=function(){
			for(var j=0;j<xiaoQuTab.length;j++){
				if(this==yeJiNav[j]){
					xiaoQuTab[j].style.display="block";
					yeJiNav[j].className="member-yeji-tabs";
				}else{
					xiaoQuTab[j].style.display="none";
					yeJiNav[j].className="member-yeji-tab";
				}
			}
		}
	}

