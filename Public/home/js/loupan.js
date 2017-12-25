/*详情页js*/
/*顶部图册*/
var headScroll=document.getElementById("head-scroll");
var headImgLeft=document.getElementById("head-img-left");
var headImgRight=document.getElementById("head-img-right");
headScroll.onmouseover=function(){ //移入箭头显示
	headImgLeft.style.display="block";
	headImgRight.style.display="block";
}
headScroll.onmouseout=function(){//移出箭头隐藏
	headImgLeft.style.display="";
	headImgRight.style.display="";
}
//图片切换
var headImg=document.getElementsByClassName("head-img");
var headImgList=document.getElementsByClassName("head-img-list");
headImg[0].style.display="block";
var headNum=0;
function headRight(imgtag){   //右边箭头控制
	for(var i=0;i<imgtag.length;i++){
		imgtag[i].style.display="none";
	}
	headNum++;
	if(headNum==imgtag.length){
		headNum=0;
	}
	imgtag[headNum].style.display="block";
}
function headLeft(imgtag){  //左边箭头控制
	for(var i=0;i<imgtag.length;i++){
		imgtag[i].style.display="none";
	}
	headNum--;
	if(headNum<0){
		headNum=imgtag.length-1;
	}
	imgtag[headNum].style.display="block";
}
//图册关闭
var imgBackgroun=document.getElementById("img-background");
var imgMain=document.getElementById("img-main");
var imgGuanbi=document.getElementById("img-guanbi");
imgGuanbi.onclick=function(){
	imgBackgroun.style.display="none";
	imgMain.style.display="none";
}
//导航栏数字
var imgShu=document.getElementsByClassName("img-shu");//数字标签
var imgTag=document.getElementsByClassName("img-tag");//导航标签
var imgBox=document.getElementsByClassName("img-box");//图片盒子标签
var imgXiaoguo=document.getElementsByClassName("img-xiaoguo");
var imgYangban=document.getElementsByClassName("img-yangban");
var imgGuihua=document.getElementsByClassName("img-guihua");
var imgShijing=document.getElementsByClassName("img-shijing");
var imgPeitao=document.getElementsByClassName("img-peitao");
var imgList=document.getElementsByClassName("img-list");
var imgLength=[imgXiaoguo.length,imgYangban.length,imgGuihua.length,imgShijing.length,imgPeitao.length];
for(var i=0;i<imgShu.length;i++){     //给导航图片统计赋值
	imgShu[i].innerHTML=imgLength[i];
}
var imgNum=0;//定义控制变量
//图片展示导航栏切换图册
function tuCe(nums){     //导航栏切换效果
	for(var i=0;i<nums.length;i++){
		nums[i].onclick=function(){
			for(var j=0;j<nums.length;j++){
				if(this==nums[j]){
					imgNum=0;       //变量重置
					imgBackgroun.style.display="block";
					imgMain.style.display="block";
					imgBox[j].style.display="block";
					imgTag[j].style.color="#fff";
					imgTag[j].style.fontSize=16+"px";
				}else{
					imgBox[j].style.display="";
					imgTag[j].style.color="";
					imgTag[j].style.fontSize="";
				}
			}
		}
	}
}
function navTuce(){
	imgBackgroun.style.display="block";
	imgMain.style.display="block";
}
tuCe(imgTag);//图册导航
tuCe(headImg);//头部大图
tuCe(headImgList);//头部小图
/*点击小图切换互动*/
var imgBottomBox=document.getElementsByClassName("img-bottom-box");
var imgBottom=document.getElementsByClassName("img-bottom");
var smallXiaoguo=document.getElementsByClassName("small-xiaoguo");
var xiaoguoOpacity=document.getElementsByClassName("xiaoguo-opacity");
var smallYangban=document.getElementsByClassName("small-yangban");
var yangbanOpacity=document.getElementsByClassName("yangban-opacity");
var smallGuihua=document.getElementsByClassName("small-guihua");
var guihuaOpacity=document.getElementsByClassName("guihua-opacity");
var smallShijing=document.getElementsByClassName("small-shijing");
var shijingOpacity=document.getElementsByClassName("shijing-opacity");
var smallPeitao=document.getElementsByClassName("small-peitao");
var peitaoOpacity=document.getElementsByClassName("peitao-opacity");
function smallBW(){     //给底部小图盒子定义宽度
	imgBottom[0].style.width=(smallXiaoguo.length*168-10)+"px";
	imgBottom[1].style.width=(smallYangban.length*168-10)+"px";
	imgBottom[2].style.width=(smallGuihua.length*168-10)+"px";
	imgBottom[3].style.width=(smallShijing.length*168-10)+"px";
	imgBottom[4].style.width=(smallPeitao.length*168-10)+"px";
}
smallBW();
//左右按钮
function imgRight(imglist,smallbox,smallop){   //右边箭头控制
	for(var i=0;i<imglist.length;i++){
		imglist[i].style.display="none";
		smallop[i].style.display="block";
	}
	imgNum++;
	if(imgNum>=imglist.length){
		imgNum=(imglist.length-1);
	}
	if(imgNum>=4&&smallbox.scrollLeft<(imgNum-3)*168){   //判断滚动条位置
		smallbox.scrollLeft+=168;    //小向左
	}else{
		smallbox.scrollLeft-=168;  //大向右
	}
	imglist[imgNum].style.display="block";
	smallop[imgNum].style.display="none";
}
function imgLeft(imglist,smallbox,smallop){  //左边箭头控制
	for(var i=0;i<imglist.length;i++){
		imglist[i].style.display="none";
		smallop[i].style.display="block";
	}
	imgNum--;
	if(imgNum<0){
		imgNum=0;
	}
	if(imgNum>=4&&smallbox.scrollLeft<(imgNum-3)*168){   //判断滚动条位置
		smallbox.scrollLeft+=168;    //小向左
	}else{
		smallbox.scrollLeft-=168;  //大向右
	}
	imglist[imgNum].style.display="block";
	smallop[imgNum].style.display="none";
}
//小图和大图互联
function smallB(smalltag,bigimg,smallbox,smallop){
	for(var i=0;i<smalltag.length;i++){
		smalltag[i].onclick=function(){
			for(var j=0;j<smalltag.length;j++){
				if(this==smalltag[j]){
					imgNum=j;       //变量赋值
					if(imgNum>=4&&smallbox.scrollLeft<(imgNum-3)*168){   //判断滚动条位置
						smallbox.scrollLeft+=168;    //小向左
					}else{
						smallbox.scrollLeft-=168;  //大向右
					}
					bigimg[j].style.display="block";
					smallop[j].style.display="none";
				}else{
					bigimg[j].style.display="";
					smallop[j].style.display="";
				}
			}
		}
	}
}
smallB(smallXiaoguo,imgXiaoguo,imgBottomBox[0],xiaoguoOpacity);
smallB(smallYangban,imgYangban,imgBottomBox[1],yangbanOpacity);
smallB(smallGuihua,imgGuihua,imgBottomBox[2],guihuaOpacity);
smallB(smallShijing,imgShijing,imgBottomBox[3],shijingOpacity);
smallB(smallPeitao,imgPeitao,imgBottomBox[4],peitaoOpacity);
//导航栏
var loupanNav=document.getElementById("loupan-nav-box");
function daoHang(){
	var scrollTop= document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;//不同浏览器获取bodyscrollTop
	if(scrollTop>=700){
		loupanNav.style.display="block";
	}else{
		loupanNav.style.display="";
	}
}
setInterval(daoHang,30)//随时判断scrollTop位置
//户型图
var huxingLink=document.getElementById("huxing-link");
var huxingImg=document.getElementsByClassName("huxing-img");
var huxingGuanbi=document.getElementById("huxing-guanbi");//关闭按钮
var huxingBack=document.getElementById("huxing-background");//大图背景
var huxingMain=document.getElementById("huxing-main");//大图内容
huxingGuanbi.onclick=function(){               //点击关闭户型图册
	huxingBack.style.display="none";
	huxingMain.style.display="none";
}
huxingLink.onclick=function(){
	huxingBack.style.display="block";
	huxingMain.style.display="block";
}
//户型图互动
var huxingBig=document.getElementsByClassName("huxing-big");//展现的大图
var huxingSmall=document.getElementsByClassName("huxing-small");//小图列表
var huxingChakan=document.getElementsByClassName("huxing-chakan");//引入
var huxingNum=0;//定义变量
function huxing(nums){     //户型图点击展现
	for(var i=0;i<huxingBig.length;i++){
		nums[i].onclick=function(){
			for(var j=0;j<huxingBig.length;j++){
				if(this==nums[j]){
					huxingNum=j;//更改变量值
					huxingBack.style.display="block";
					huxingMain.style.display="block";
					huxingBig[j].style.display="block";
				}else{
					huxingBig[j].style.display="";
				}
			}
		}
	}
}
huxing(huxingImg);
huxing(huxingSmall);
huxing(huxingChakan);
//左右按钮
function huxingRight(){   //右边箭头控制
	for(var i=0;i<huxingBig.length;i++){
		huxingBig[i].style.display="none";
	}
	huxingNum++;
	if(huxingNum>=huxingBig.length){
		huxingNum=(huxingBig.length-1);
	}
	huxingBig[huxingNum].style.display="block";
}
function huxingLeft(){  //左边箭头控制
	for(var i=0;i<huxingBig.length;i++){
		huxingBig[i].style.display="none";
	}
	huxingNum--;
	if(huxingNum<0){
		huxingNum=0;
	}
	huxingBig[huxingNum].style.display="block";
}
//input焦点
var loupanInput=document.getElementsByClassName("input-text");
var loupanArray=["请输入关键字（楼盘名/地名/开发商等）","请输入您的手机号","请输入您的手机号"];
inputText(loupanInput[0],loupanArray[0]);
inputText(loupanInput[1],loupanArray[1]);
inputText(loupanInput[2],loupanArray[2]);
//楼盘推荐鼠标移入效果
var bottomFineImg=document.getElementsByClassName("fineimg");
fine(bottomFineImg);








                 