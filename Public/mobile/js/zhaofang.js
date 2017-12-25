window.onload=function(){
	//首页banner
	var mySwiper = new Swiper ('#head', {
		pagination: '.swiper-pagination',
		effect : 'fade',
		autoplay: 5000,
		loop: true,
	});  
	//
	var quYu=document.getElementById("zhaofang-quyu");
	var quYuT=quYu.getElementsByClassName("zhaofang-tag");
	var quYuO=quYu.getElementsByTagName("input");
	//
	var leiXing=document.getElementById("zhaofang-leixing");
	var leiXingT=leiXing.getElementsByClassName("zhaofang-tag");
	var leiXingO=leiXing.getElementsByTagName("input");
	//
	var huXing=document.getElementById("zhaofang-huxing");
	var huXingT=huXing.getElementsByClassName("zhaofang-tag");
	var huXingO=huXing.getElementsByTagName("input");
	//
	var yuSuan=document.getElementById("zhaofang-yusuan");
	var yuSuanT=yuSuan.getElementsByClassName("zhaofang-tag");
	var yuSuanO=yuSuan.getElementsByTagName("input");
	//alert(yuSuanO.length)
	//筛选按钮点击
	var checkedNum=0;//多选判断
	function tiaojianQY(a,b){
		for(var i=0;i<a.length;i++){
			b[i].onclick=function(){
				checkedNum++;
				if(checkedNum>3){
					alert("最多可选择三个区域");
				}else{
					for(var j=0;j<a.length;j++){
						if(this==b[j]){
							a[j].checked=true;
							b[j].style.color="#f65f40";
							b[j].style.borderColor="#f65f40";
						}
					}
				}
			}
		}
	}
	function tiaojian(a,b){
		for(var i=0;i<a.length;i++){
			b[i].onclick=function(){
				for(var j=0;j<a.length;j++){
					if(this==b[j]){
						a[j].checked=true;
						b[j].style.color="#f65f40";
						b[j].style.borderColor="#f65f40";
					}else{
						a[j].checked=false;
						b[j].style.color="";
						b[j].style.borderColor="";
					}
				}
			}
		}
	}
	tiaojianQY(quYuO,quYuT);
	tiaojian(leiXingO,leiXingT);
	tiaojian(huXingO,huXingT);
	tiaojian(yuSuanO,yuSuanT);
	//重置
	var linkIndex=document.getElementById("link-chongzhi");
	linkIndex.onclick=function(){  //选择重置
		function tagO(a,b){
			for(var i=0;i<a.length;i++){
				checkedNum=0;
				a[i].checked=false;
				b[i].style.color="#333";
				b[i].style.borderColor="#eee";
			}
		}
		tagO(quYuO,quYuT);
		tagO(leiXingO,leiXingT);
		tagO(huXingO,huXingT);
		tagO(yuSuanO,yuSuanT);
	}
	
	
	
	
}
