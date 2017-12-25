var kaiShi=document.getElementsByClassName("kaishi");//计算按钮
var sliLvMenu=document.getElementById("s-lilv-menu");//商贷利率
var sliLvOption=sliLvMenu.getElementsByTagName("li");//商贷利率列表
var sliLvShow=document.getElementById("s-lilv-show");//商贷利率显示
var sliLvText=document.getElementById("s-lilv-text");//商贷利率输出框
var gliLvMenu=document.getElementById("g-lilv-menu");//商贷利率
var gliLvOption=gliLvMenu.getElementsByTagName("li");//商贷利率列表
var gliLvShow=document.getElementById("g-lilv-show");//商贷利率显示
var gliLvText=document.getElementById("g-lilv-text");//商贷利率输出框
var shijianMenu=document.getElementById("shijian-menu");//时间
var shijianOption=shijianMenu.getElementsByTagName("li");//时间列表
var liLvMenuBox=document.getElementsByClassName("lilv-menubox");
var jisuanMenu=document.getElementsByClassName("jisuan-menu");
var shiJianShow=document.getElementById("shijian-show");//时间显示
var sLiLV=4.90;//商贷基准利率
var gLiLV=3.25;//公积金准利率
var sliLvArray=[1,0.7,0.75,0.8,0.85,0.9,1.05,1.1,1.2,1.3];//利率换算数组
var gliLvArray=[1,1.1,1.2];//利率换算数组
sliLvText.value=sLiLV;
gliLvText.value=gLiLV;
var panduan=0;
for(var i=0;i<jisuanMenu.length;i++){   //点击出现下拉框
	liLvMenuBox[i].onclick=function(){
		for(var j=0;j<jisuanMenu.length;j++){
			if(this==liLvMenuBox[j]){
				if(panduan==0){
					jisuanMenu[j].style.display="block";
					panduan=1;
				}else{
					jisuanMenu[j].style.display="none";
					panduan=0;
				}
			}
		}
	}
}
var fangShi=document.getElementById("fangshi");//方式盒子
var fangShiMenu=document.getElementById("fangshi-menu");//方式菜单
var fangShiOption=fangShiMenu.getElementsByTagName("li");//方式列表
var fangShiShow=document.getElementById("fangshi-show");//方式显示
var fangShi=document.getElementById("fangshi");//方式盒子
var shangdaiBox=document.getElementById("shangdai-box");//商业贷款盒子
var gongjijinBox=document.getElementById("gongjijin-box");//公积金贷款盒子
var zongeS=document.getElementById("s-zonge");
var zongeG=document.getElementById("g-zonge");
fangShiOption[0].onclick=function(){
	liText=fangShiOption[0].innerText;
	fangShiShow.innerText=liText;
	shangdaiBox.style.display="block";
	gongjijinBox.style.display="none";
	for(var i=0;i<kaiShi.length;i++){
		kaiShi[i].style.display="none";
	}
	kaiShi[0].style.display="block";
}
fangShiOption[1].onclick=function(){
	liText=fangShiOption[1].innerText;
	fangShiShow.innerText=liText;
	shangdaiBox.style.display="none";
	gongjijinBox.style.display="block";
	for(var i=0;i<kaiShi.length;i++){
		kaiShi[i].style.display="none";
	}
	kaiShi[1].style.display="block";
}
fangShiOption[2].onclick=function(){
	liText=fangShiOption[2].innerText;
	fangShiShow.innerText=liText;
	shangdaiBox.style.display="block";
	gongjijinBox.style.display="block";
	for(var i=0;i<kaiShi.length;i++){
		kaiShi[i].style.display="none";
	}
	kaiShi[2].style.display="block";
}
var liText=0;//定义变量存储文本
function lilvJiSuan(sliLvOption,sliLvOption,sliLvShow,sliLvText,sliLvArray,sLiLV){
	for(var i=0;i<sliLvOption.length;i++){   //利率点击下拉框计算当前利率
		sliLvOption[i].onclick=function(){
			for(var j=0;j<sliLvOption.length;j++){
				if(this==sliLvOption[j]){
					liText=sliLvOption[j].innerText;
					sliLvShow.innerText=liText;
					sliLvText.value=(sliLvArray[j]*sLiLV).toFixed(2);
				}
			}
		}
	}
}
lilvJiSuan(sliLvOption,sliLvOption,sliLvShow,sliLvText,sliLvArray,sLiLV);
lilvJiSuan(gliLvOption,gliLvOption,gliLvShow,gliLvText,gliLvArray,gLiLV);
function menuText(shijianOption,shiJianShow){
	for(var i=0;i<shijianOption.length;i++){   //时间点击下拉框列表对应
		shijianOption[i].onclick=function(){
			for(var j=0;j<shijianOption.length;j++){
				if(this==shijianOption[j]){
					liText=shijianOption[j].innerText;
					shiJianShow.innerText=liText;
				}
			}
		}
	}
}
menuText(shijianOption,shiJianShow)
var benxiYue=document.getElementById("benxi-yue");//本息还款月
var benxiYueGong=document.getElementById("benxi-yuegong");//本息还款月
var benxiZongLi=document.getElementById("benxi-zongli");//本息还总利息
var benxiHeJi=document.getElementById("benxi-heji");//本息还款合计
var benjinYue=document.getElementById("benjin-yue");//本金还款月
var benjinYueGong=document.getElementById("benjin-yuegong");//本金还款月
var benjinZongLi=document.getElementById("benjin-zongli");//本金还总利息
var benjinHeJi=document.getElementById("benjin-heji");//本金还款合计
var benjinDijian=document.getElementById("benjin-dijian");//本金还款合计
//房贷计算器
function fangDai(benJin,liLv,yueShu){
	var fangdai=new Object();
	fangdai.benJin=benJin;//贷款本金
	fangdai.liLv=liLv/100/12;//月利率
	fangdai.yue=yueShu;//贷款总还款月
	fangdai.yuegongX=fangdai.benJin*fangdai.liLv*Math.pow((1+fangdai.liLv),fangdai.yue)/(Math.pow((1+fangdai.liLv),fangdai.yue)-1)//等额本息月供
	fangdai.zongLiXiX=fangdai.yue*fangdai.yuegongX-fangdai.benJin;//等额本息总利息
	fangdai.heJiX=fangdai.benJin+fangdai.zongLiXiX;//等额本息本息合计
	fangdai.yuegongJ=fangdai.benJin/fangdai.yue+fangdai.benJin*fangdai.liLv///等额本金月供
	fangdai.zongLiXiJ=((fangdai.benJin/fangdai.yue+fangdai.benJin*fangdai.liLv)+fangdai.benJin/fangdai.yue*(1+fangdai.liLv))/2*fangdai.yue-fangdai.benJin//等额本金总利息
	fangdai.heJiJ=fangdai.benJin+fangdai.zongLiXiJ;//等额本金本息合计
	fangdai.diJian=fangdai.benJin/fangdai.yue*fangdai.liLv;//每月递减数
	return fangdai;
}
kaiShi[0].onclick=function(){//商贷
	var sBenJin=document.getElementById("s-zonge").value;//商贷款总额
	var sZongE=sBenJin*10000;
	var sLiLv=sliLvText.value;//获取当前年利率
	var yueShu=parseInt(shiJianShow.innerText)*12;//贷款总月数
	var shangDai=fangDai(sZongE,sLiLv,yueShu);//商贷函数
	benxiYue.innerText=yueShu;
	benxiYueGong.innerText=shangDai.yuegongX.toFixed(2);
	benxiZongLi.innerText=shangDai.zongLiXiX.toFixed(2);
	benxiHeJi.innerText=shangDai.heJiX.toFixed(2);
	benjinYue.innerText=yueShu;
	benjinYueGong.innerText=shangDai.yuegongJ.toFixed(2);
	benjinZongLi.innerText=shangDai.zongLiXiJ.toFixed(2);
	benjinHeJi.innerText=shangDai.heJiJ.toFixed(2);
	benjinDijian.innerText=shangDai.diJian.toFixed(2);
}
kaiShi[1].onclick=function(){//公积金贷
	var gBenJin=document.getElementById("g-zonge").value;//公贷款总额
	var gZongE=gBenJin*10000;
	var gLiLv=gliLvText.value;//获取当前年利率
	var yueShu=parseInt(shiJianShow.innerText)*12;//贷款总月数
	var gongDai=fangDai(gZongE,gLiLv,yueShu);//公贷函数
	benxiYue.innerText=yueShu;
	benxiYueGong.innerText=gongDai.yuegongX.toFixed(2);
	benxiZongLi.innerText=gongDai.zongLiXiX.toFixed(2);
	benxiHeJi.innerText=gongDai.heJiX.toFixed(2);
	benjinYue.innerText=yueShu;
	benjinYueGong.innerText=gongDai.yuegongJ.toFixed(2);
	benjinZongLi.innerText=gongDai.zongLiXiJ.toFixed(2);
	benjinHeJi.innerText=gongDai.heJiJ.toFixed(2);
	benjinDijian.innerText=gongDai.diJian.toFixed(2);
}
kaiShi[2].onclick=function(){     //组合贷
	var sBenJin=document.getElementById("s-zonge").value;//商贷款总额
	var gBenJin=document.getElementById("g-zonge").value;//公贷款总额
	var sZongE=sBenJin*10000;
	var gZongE=gBenJin*10000;
	var sLiLv=sliLvText.value;//获取当前年利率
	var gLiLv=gliLvText.value;//获取当前年利率
	var yueShu=parseInt(shiJianShow.innerText)*12;//贷款总月数
	var shangDai=fangDai(sZongE,sLiLv,yueShu);//商贷函数
	var gongDai=fangDai(gZongE,gLiLv,yueShu);//公贷函数
	benxiYue.innerText=yueShu;
	benxiYueGong.innerText=(shangDai.yuegongX+gongDai.yuegongX).toFixed(2);
	benxiZongLi.innerText=(shangDai.zongLiXiX+gongDai.zongLiXiX).toFixed(2);
	benxiHeJi.innerText=(shangDai.heJiX+gongDai.heJiX).toFixed(2);
	benjinYue.innerText=yueShu;
	benjinYueGong.innerText=(shangDai.yuegongJ+gongDai.yuegongJ).toFixed(2);
	benjinZongLi.innerText=(shangDai.zongLiXiJ+gongDai.zongLiXiJ).toFixed(2);
	benjinHeJi.innerText=(shangDai.heJiJ+gongDai.heJiJ).toFixed(2);
	benjinDijian.innerText=(shangDai.diJian+gongDai.diJian).toFixed(2);
}












