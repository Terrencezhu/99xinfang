<?php
namespace Home\Controller;
use Home\Controller\CommonController;

class IndexController extends CommonController {
	/*首页*/
    public function index(){


    	//首页数据处理
          /*99新房为您推荐*/
        $house_info = M('house_image')
                     ->alias('a')
                     ->field('b.house_id,a.image,b.house_name,b.build_type,b.dili,b.mix_mianji,b.max_mianji,b.last_time,b.decorate')
                     ->join('left join house_info b ON a.house_id = b.house_id')
                     ->where("a.img_class='face'")
                     ->select();

        $this->assign('house_info',$house_info);
        $this->display();
           
    }
    

}