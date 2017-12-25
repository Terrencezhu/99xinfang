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
//顶部切换
var jisuanTab=document.getElementsByClassName("jisuan-tab");
var jisuanJT=document.getElementsByClassName("jisuan-jt");
var jisuanBox=document.getElementsByClassName("jisuan-box");
jisuanJT[0].style.display="block";
jisuanBox[0].style.display="block";
function jisuantab(a,b,c){
	for(var i=0;i<a.length;i++){
		a[i].onclick=function(){
			for(var j=0;j<a.length;j++){
				if(this==a[j]){
					a[j].style.color="#f0521a";
					b[j].style.display="block";
					c[j].style.display="block";
				}else{
					a[j].style.color="#333";
					b[j].style.display="none";
					c[j].style.display="none";
				}
			}
		}
	}
}
jisuantab(jisuanTab,jisuanJT,jisuanBox);//顶部计算方式切换
//还款方式
var fangShi=document.getElementsByClassName("fangshi");
var fangShiBox=document.getElementsByClassName("fangshi-box");
var fangShiImg=document.getElementsByClassName("fangshi-img");
for(var i=0;i<fangShiBox.length;i++){   //隐藏第二个结果显示页
	if(i%2==0){
		fangShiBox[i].style.display="block";
	}else{
		fangShiBox[i].style.display="none";
	}
}
function fangshi(a,b,c){   //还款方式切换函数
	for(var i=0;i<a.length;i++){
		a[i].onclick=function(){
			for(var j=0;j<a.length;j++){
				if(this==a[j]){
					a[j].style.color="#f0521a";
					b[j].style.display="block";
					c[j].src="img/tubiao/radios.png";
				}else{
					a[j].style.color="#333";
					b[j].style.display="none";//下拉列表隐藏
					c[j].src="img/tubiao/radio.png";
				}
			}
		}
	}
}
fangshi(fangShi,fangShiBox,fangShiImg);//还款方式切换
//选项点击下拉
var xlpanduan=0;//定义判断变量
function xiala(a,b){
	a.onclick=function(){
		if(xlpanduan==0){
			b.style.display="block";
			xlpanduan=1;
		}else{
			b.style.display="none";
			xlpanduan=0;
		}
	}
}
//商业贷款 含通用函数
var sZongJia=document.getElementById("s-zongjia")//总额
var sShouFu=document.getElementById("s-shoufu")//首付
var sShouFuMenu=document.getElementById("s-shoufu-menu")//首付下拉
var sShouFuTag=sShouFuMenu.getElementsByTagName("li");//下拉选项
var sDaiKuan=document.getElementById("s-daikuan")//贷款金额
var sShiJian=document.getElementById("s-shijian")//贷款年限
var sShiJianMenu=document.getElementById("s-shijian-menu");//时间下拉
var sShiJianTag=sShiJianMenu.getElementsByTagName("li");//下拉选项
var sLiLvs=document.getElementById("s-lilv")//商贷年利率
var sLiLvMenu=document.getElementById("s-lilv-menu");//商贷利率下拉
var sLiLvTag=sLiLvMenu.getElementsByTagName("li");//下拉选项
xiala(sShouFu,sShouFuMenu);//商贷首付下拉函数
xiala(sShiJian,sShiJianMenu);//贷款年限
xiala(sLiLvs,sLiLvMenu);//商贷利率
function shoufu(a,b,c,d,e){  //首付计算下拉函数
	for(var i=0;i<a.length;i++){
		a[i].onclick=function(){
			for(var j=0;j<a.length;j++){
				if(this==a[j]){
					var Numa=b.value;//获取当前总额
					c.innerText=Math.round(Numa*(j+1)*0.1);//计算首付
					e.value=Numa-c.innerText;//计算贷款金额
					d.style.display="none";//下拉列表隐藏
				}
			}
		}
	}
}
shoufu(sShouFuTag,sZongJia,sShouFu,sShouFuMenu,sDaiKuan)//调用函数
//贷款年限下拉
function shijian(a,b,c){
	for(var i=0;i<a.length;i++){
		a[i].onclick=function(){
			for(var j=0;j<a.length;j++){
				if(this==a[j]){
					b.innerText=(j+1)*5;//计算时间
					c.style.display="none";//下拉列表隐藏
				}
			}
		}
	}
}
shijian(sShiJianTag,sShiJian,sShiJianMenu);//调用函数
//
var shangLi=4.90;//商贷基准利率
var gongLi=3.25;//公积金准利率
var sliLvArray=[1,0.7,0.75,0.8,0.85,0.9,1.05,1.1,1.2,1.3];//商贷利率换算数组
var gliLvArray=[1,1.1,1.2];//公积金利率换算数组
sLiLvs.value=shangLi;
//利率函数
function lilv(a,b,c,d,e){
	for(var i=0;i<a.length;i++){
		a[i].onclick=function(){
			for(var j=0;j<a.length;j++){
				if(this==a[j]){
					b.value=(c*d[j]).toFixed(2);//计算利率
					e.style.display="none";//下拉列表隐藏
				}
			}
		}
	}
}
lilv(sLiLvTag,sLiLvs,shangLi,sliLvArray,sLiLvMenu);//商贷利率
//
var jiSuan=document.getElementsByClassName("jisuan")//计算按钮
//等额本息还款结果
var sbxYueGong=document.getElementById("sbx-yuegong")//月供
var sbxHeJi=document.getElementById("sbx-huankuan")//还款
var sbxDaiKuan=document.getElementById("sbx-daikuan")//贷款
var sbxZongLi=document.getElementById("sbx-lixi")//利息
//等额本金还款结果
var sbjYueGong=document.getElementById("sbj-yuegong")//月供
var sbjHeJi=document.getElementById("sbj-huankuan")//还款
var sbjDiJian=document.getElementById("sbj-dijian")//贷款
var sbjZongLi=document.getElementById("sbj-lixi")//利息
jiSuan[0].onclick=function(){//商贷
	var sBenJin=sDaiKuan.value;//商贷款总额
	var sZongE=sBenJin*10000;
	var sLiLv=sLiLvs.value;//获取当前年利率
	var yueShu=parseInt(sShiJian.innerText)*12;//贷款总月数
	var shangDai=fangDai(sZongE,sLiLv,yueShu);//商贷函数
	//等额本息
	sbxYueGong.innerText=shangDai.yuegongX.toFixed(2);//本息月供
	sbxZongLi.innerText=shangDai.zongLiXiX.toFixed(2);//总利息
	sbxDaiKuan.innerText=sZongE;
	sbxHeJi.innerText=shangDai.heJiX.toFixed(2);//本息合计
	//等额本金
	sbjYueGong.innerText=shangDai.yuegongJ.toFixed(2);//本金月供
	sbjZongLi.innerText=shangDai.zongLiXiJ.toFixed(2);//本金总利息
	sbjHeJi.innerText=shangDai.heJiJ.toFixed(2);//本金合计
	sbjDiJian.innerText=shangDai.diJian.toFixed(2);//本金递减
}
//公积金贷款
var gZongJia=document.getElementById("g-zongjia")//总额
var gShouFu=document.getElementById("g-shoufu")//首付
var gShouFuMenu=document.getElementById("g-shoufu-menu")//首付下拉
var gShouFuTag=gShouFuMenu.getElementsByTagName("li");//下拉选项
var gDaiKuan=document.getElementById("g-daikuan")//贷款金额
var gShiJian=document.getElementById("g-shijian")//贷款年限
var gShiJianMenu=document.getElementById("g-shijian-menu");//时间下拉
var gShiJianTag=gShiJianMenu.getElementsByTagName("li");//下拉选项
var gLiLvs=document.getElementById("g-lilv")//公积金年利率
var gLiLvMenu=document.getElementById("g-lilv-menu");//公积金利率下拉
var gLiLvTag=gLiLvMenu.getElementsByTagName("li");//下拉选项
xiala(gShouFu,gShouFuMenu);//公积金首付下拉函数
xiala(gShiJian,gShiJianMenu);//贷款年限
xiala(gLiLvs,gLiLvMenu);//公积金利率
shoufu(gShouFuTag,gZongJia,gShouFu,gShouFuMenu,gDaiKuan)//计算首付函数
//贷款年限下拉
shijian(gShiJianTag,gShiJian,gShiJianMenu);//调用函数
//
gLiLvs.value=gongLi;
//利率函数
lilv(gLiLvTag,gLiLvs,gongLi,gliLvArray,gLiLvMenu);//商贷利率
//等额本息还款结果
var gbxYueGong=document.getElementById("gbx-yuegong")//月供
var gbxHeJi=document.getElementById("gbx-huankuan")//还款
var gbxDaiKuan=document.getElementById("gbx-daikuan")//贷款
var gbxZongLi=document.getElementById("gbx-lixi")//利息
//等额本金还款结果
var gbjYueGong=document.getElementById("gbj-yuegong")//月供
var gbjHeJi=document.getElementById("gbj-huankuan")//还款
var gbjDiJian=document.getElementById("gbj-dijian")//贷款
var gbjZongLi=document.getElementById("gbj-lixi")//利息
jiSuan[1].onclick=function(){//商贷
	var gBenJin=gDaiKuan.value;//商贷款总额
	var gZongE=gBenJin*10000;
	var gLiLv=gLiLvs.value;//获取当前年利率
	var yueShu=parseInt(gShiJian.innerText)*12;//贷款总月数
	var shangDai=fangDai(gZongE,gLiLv,yueShu);//商贷函数
	//等额本息
	gbxYueGong.innerText=shangDai.yuegongX.toFixed(2);//本息月供
	gbxZongLi.innerText=shangDai.zongLiXiX.toFixed(2);//总利息
	gbxDaiKuan.innerText=gZongE;
	gbxHeJi.innerText=shangDai.heJiX.toFixed(2);//本息合计
	//等额本金
	gbjYueGong.innerText=shangDai.yuegongJ.toFixed(2);//本金月供
	gbjZongLi.innerText=shangDai.zongLiXiJ.toFixed(2);//本金总利息
	gbjHeJi.innerText=shangDai.heJiJ.toFixed(2);//本金合计
	gbjDiJian.innerText=shangDai.diJian.toFixed(2);//本金递减
}
//组合贷款
var zsDaiKuan=document.getElementById("zs-daikuan")//贷款金额
var zgDaiKuan=document.getElementById("zg-daikuan")//贷款金额
var zShiJian=document.getElementById("z-shijian")//贷款年限
var zShiJianMenu=document.getElementById("z-shijian-menu");//时间下拉
var zShiJianTag=zShiJianMenu.getElementsByTagName("li");//下拉选项
var zsLiLvs=document.getElementById("zs-lilv")//商贷年利率
var zsLiLvMenu=document.getElementById("zs-lilv-menu");//商贷利率下拉
var zsLiLvTag=zsLiLvMenu.getElementsByTagName("li");//下拉选项
var zgLiLvs=document.getElementById("zg-lilv")//公积金年利率
var zgLiLvMenu=document.getElementById("zg-lilv-menu");//公积金利率下拉
var zgLiLvTag=zgLiLvMenu.getElementsByTagName("li");//下拉选项
xiala(zShiJian,zShiJianMenu);//贷款年限
xiala(zsLiLvs,zsLiLvMenu);//商贷利率
xiala(zgLiLvs,zgLiLvMenu);//公积金利率
//贷款年限下拉
shijian(zShiJianTag,zShiJian,zShiJianMenu);//调用函数
//
zsLiLvs.value=shangLi;
zgLiLvs.value=gongLi;
//利率函数
lilv(zsLiLvTag,zsLiLvs,shangLi,sliLvArray,zsLiLvMenu);//商贷利率
lilv(zgLiLvTag,zgLiLvs,gongLi,gliLvArray,zgLiLvMenu);//商贷利率
//等额本息还款结果
var zbxYueGong=document.getElementById("zbx-yuegong")//月供
var zbxHeJi=document.getElementById("zbx-huankuan")//还款
var zbxDaiKuan=document.getElementById("zbx-daikuan")//贷款
var zbxZongLi=document.getElementById("zbx-lixi")//利息
//等额本金还款结果
var zbjYueGong=document.getElementById("zbj-yuegong")//月供
var zbjHeJi=document.getElementById("zbj-huankuan")//还款
var zbjDiJian=document.getElementById("zbj-dijian")//贷款
var zbjZongLi=document.getElementById("zbj-lixi")//利息
jiSuan[2].onclick=function(){     //组合贷
	var sBenJin=zsDaiKuan.value;//商贷款总额
	var gBenJin=zgDaiKuan.value;//公贷款总额
	var sZongE=sBenJin*10000;
	var gZongE=gBenJin*10000;
	var zsLiLv=zsLiLvs.value;//获取当前年利率
	var zgLiLv=zgLiLvs.value;//获取当前年利率
	var yueShu=parseInt(zShiJian.innerText)*12;//贷款总月数
	var shangDai=fangDai(sZongE,zsLiLv,yueShu);//商贷函数
	var gongDai=fangDai(gZongE,zgLiLv,yueShu);//公贷函数
	zbxYueGong.innerText=(shangDai.yuegongX+gongDai.yuegongX).toFixed(2);
	zbxZongLi.innerText=(shangDai.zongLiXiX+gongDai.zongLiXiX).toFixed(2);
	zbxHeJi.innerText=(shangDai.heJiX+gongDai.heJiX).toFixed(2);
	zbxDaiKuan.innerText=sZongE;
	zbjYueGong.innerText=(shangDai.yuegongJ+gongDai.yuegongJ).toFixed(2);
	zbjZongLi.innerText=(shangDai.zongLiXiJ+gongDai.zongLiXiJ).toFixed(2);
	zbjHeJi.innerText=(shangDai.heJiJ+gongDai.heJiJ).toFixed(2);
	zbjDiJian.innerText=(shangDai.diJian+gongDai.diJian).toFixed(2);
}












