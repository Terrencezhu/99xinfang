<?php

namespace Mobile\Controller;
use Home\Controller\CommonController;
class IndexController extends CommonController {

    public function index() {
        $count = M('house_info')->count();
        // $Page = new Page($count, 5);
        // $show = $Page->show();
        $list_house_info = M('house_image')
                ->alias('a')
                ->field('a.image,b.house_id,
                                  b.house_name,b.property_right,
                                  b.dili,b.mix_mianji,
                                  b.max_mianji,b.xiaoshou_zt,
                                  b.decorate,b.junjia,b.shoufu')
                ->join('left join house_info b ON a.house_id = b.house_id ')
                ->where("a.img_class='face'")
                ->limit(10)
                ->select();
        foreach ($list_house_info as $key=>$value) {
            $total_price = $value['min_mianji']*$value['junjia'];
        }
        $this->assign("total", $total_price);
        $this->assign("list", $list_house_info);
        $this->display();
    }
}