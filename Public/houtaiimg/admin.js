 $(function(){
    $("#left").height($(window).height());//设置left高度
	$("#right").height($(window).height());//设置right高度
	$("#right").width($(window).width()-280);//设置right宽度
	$("#right").css("min-width","960");//设置right最小宽度
	$("#right").css("max-width","1600");//设置right最大宽度
//	左侧导航展现
	var left_li=$(".left-li");
	var left_nav=$(".left-nav");
	var left_li_span=$(".left-li-span");
	var right_list=$(".right-list");
	function leftnav(){
		for(var i=0;i<left_li.length;i++){
			left_li[i].onclick=function(){
				for(var j=0;j<left_li.length;j++){
					if(this==left_li[j]){
						if(left_nav[j].style.display=="block"){
							left_li_span[j].innerHTML="▶"
							left_nav[j].style.display="";
						}else{
							left_li[j].style.background="url(/left-li.jpg)";
							left_li_span[j].innerHTML="▼";
							left_nav[j].style.display="block";
						}
					}else{
						left_li[j].style.background="";
						left_li_span[j].innerHTML="▶"
						left_nav[j].style.display="";
					}
				}
			}
		}
	}
	leftnav();
//图片上传预览
	var xinxi_file=document.getElementsByClassName("xinxi-files")
	var xinxi_file_img=document.getElementsByClassName("xinxi-file-img")
	for(var i=0;i<xinxi_file.length;i++){
       	xinxi_file[i].onchange=function(){
       	 	for(var j=0;j<xinxi_file.length;j++){
       	 		if(this==xinxi_file[j]){
       	 			var img=0;
	                img=window.URL.createObjectURL(xinxi_file[j].files[0])
	                img.onload=function(){
	                    window.URL.revokeObjectURL(this)
	                }
	                xinxi_file_img[j].innerHTML="<img src='"+img+"'>";
       	 		}
       	 	}      
        }
    }
});
