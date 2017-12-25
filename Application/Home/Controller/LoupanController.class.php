<?php

namespace Home\Controller;
use Home\Controller\CommonController;

class LoupanController extends CommonController {

    /*楼盘详情页*/
    
    public function detail(){
        //获取对应楼盘id，展示在详情页
        $map_house_info = array();
        $id = $_GET['id'];
        $map_house_info['house_id'] = array('eq',$id);
        $house_info = M('house_info')
             ->field()
             ->where($map_house_info)
             ->find();
        $this->assign('house_info',$house_info);

        $map_house_image = array();
        $map_house_image['house_id'] = array('eq',$id);
        $map_house_image['img_face'] = array('eq',1);
        $house_image = M('house_image')
             ->field()
             ->where($map_house_image)
             ->select();
        $this->assign('house_image',$house_image);

        $map_house_image1 = array();
        $map_house_image1['house_id'] = array('eq',$id);
        $house_image1 = M('house_image')
             ->field('image,img_class')
             ->where($map_house_image1)
             ->select();
        $this->assign('house_image1',$house_image1);

        //热门推荐
        $hot_house_info = M('house_image')
             ->alias('a')
             ->field('b.house_id,a.image,b.house_name,b.junjia,b.mix_mianji,b.max_mianji,b.shoufu,b.tel')
             ->join('left join house_info b ON a.house_id = b.house_id')
             ->where("a.img_class='face'")
             ->select();

        $this->assign('hot_house_info',$hot_house_info);

        //户型图
        $hxt_info = M('house_hximg')
            ->alias('hx')
             ->field('b.*,hx.*')
             ->join('left join house_info b ON hx.house_id = b.house_id')
             ->select();

        $this->assign('hxt_info',$hxt_info);


        $this->display();
    }


    public function baoming(){

        $this->display();
    }
    
}