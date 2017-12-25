var map = new BMap.Map("container");    // 创建Map实例
var point=new BMap.Point(120.932112,30.82687);//创建坐标
map.centerAndZoom(point,14);//创建地图中心和地图等级
map.disableDoubleClickZoom()//禁用双击放大
var anchors={anchor:BMAP_ANCHOR_BOTTOM_LEFT}      //更改控件的位置
map.addControl(new BMap.ScaleControl(anchors));//创建比例尺控件
var samll={type:BMAP_NAVIGATION_CONTROL_ZOOM};//缩放控件样式选择
map.addControl(new BMap.NavigationControl(samll));//创建缩放控件
// 编写自定义函数，创建标注
var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);               // 将标注添加到地图中
marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
//周边搜索
var mapMath=["购物","教育","医院","餐饮","娱乐","公园","交通","金融","小区"];
var keyword;
function mapF(){                      //搜索周边函数
	var local = new BMap.LocalSearch(map, {
	renderOptions: {map: map,autoViewport: false,selectFirstResult: false,panel: "mianban"}
	});
	local.searchInBounds(keyword, map.getBounds());
}
function mapS(m){                  //切换关键字函数
	map.clearOverlays();
	var marker = new BMap.Marker(point);  // 创建标注
	map.addOverlay(marker);               // 将标注添加到地图中
	marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
	keyword=m;
	mapF();
}
//点击时改变样式
var mapLi=document.getElementsByClassName("mapl-li");
var mapTag=document.getElementsByClassName("map-tag");
var mapKeyWord=document.getElementsByClassName("map-keyword");
for(var i=0;i<mapLi.length;i++){
	mapLi[i].onmousemove=function(){
		for(var j=0;j<mapLi.length;j++){
			if(this==mapLi[j]){
				mapTag[j].style.backgroundColor="#e14122";
				mapKeyWord[j].style.color="#e14122";
			}else{
				mapTag[j].style.backgroundColor="";
				mapKeyWord[j].style.color="";
			}
		}
	}
	mapLi[i].onmouseout=function(){
		for(var j=0;j<mapLi.length;j++){
			if(this==mapLi[j]){
				mapTag[j].style.backgroundColor="";
				mapKeyWord[j].style.color="";
			}
		}
	}
}

















