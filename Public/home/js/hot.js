var hotShow=document.getElementsByClassName("hot-show");
var hotHidden=document.getElementsByClassName("hot-hidden");
for(var i=0;i<hotShow.length;i++){      //首图移入
	hotShow[i].onmouseover=function(){
		for(var j=0;j<hotShow.length;j++){
			if(this==hotShow[j]){
				hotHidden[j].style.display="block";
			}else{
				hotHidden[j].style.display="";
			}
		}
	}
}
for(var i=0;i<hotShow.length;i++){    //移出
	hotShow[i].onmouseout=function(){
		for(var j=0;j<hotShow.length;j++){
			if(this==hotShow[j]){
				hotHidden[j].style.display="";
			}
		}
	}
}
//配套
var hotHover=document.getElementsByClassName("hot-hover");
var hotTag=document.getElementsByClassName("hottag");
for(var i=0;i<hotHover.length;i++){      //移入
	hotHover[i].onmouseover=function(){
		for(var j=0;j<hotHover.length;j++){
			if(this==hotHover[j]){
				hotTag[j].style.display="block";
			}else{
				hotTag[j].style.display="";
			}
		}
	}
}
for(var i=0;i<hotHover.length;i++){    //移出
	hotHover[i].onmouseout=function(){
		for(var j=0;j<hotHover.length;j++){
			if(this==hotHover[j]){
				hotTag[j].style.display="";
			}
		}
	}
}
