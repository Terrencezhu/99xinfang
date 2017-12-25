<?php

namespace Mobile\Controller;
use Home\Controller\CommonController;
use Think\Page;

class SearchController extends CommonController {

    public function index() {
        //分页展示
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
                ->join('left join house_info b ON a.house_id = b.house_id')
                ->where("a.img_class='face'")
                ->limit(40)
                ->select();
        $this->assign("list", $list_house_info);
        $this->display();
    }

    public function search() {
        //区域
        if($_GET['city']){
            $map["b.region_id"] = array('eq', $_GET['city']);
        }
        if($_GET['next_city']){
            $map["a.img_class"] = array('eq', 'face');            
        }    
        //价格
        if($_GET['price']){
            $map["a.img_class"] = array('eq', 'face');            
        }
        //类型
        if($_GET['lx']){
            $map["a.img_class"] = array('eq', 'face');           
        }        
        //面积
        if($_GET['mj']){
            $map["a.img_class"] = array('eq', 'face');            
        }        
        //销售
        if($_GET['xs']){
            $map["a.img_class"] = array('eq', 'face');            
        }        
        //建筑  
        if($_GET['jz']){
            $map["a.img_class"] = array('eq', 'face');            
        }
        
        
        //关键字
        $q = $_GET['guanjianzi'];
        //首页选的id
        $id = $_GET['id'];
        if ($q) {
            $map = $map1 = array();
            $map["b.house_name|b.house_address|b.dili"] = array('like', "%" . $q . "%");
            $map1["house_name|house_address|dili"] = array('like', "%" . $q . "%");
            $map["a.img_class"] = array('eq', 'face');

            $count = M('house_info')->where($map1)->count();
            $Page = new Page($count, 4);
            $show = $Page->show();

            $list_house_info = M('house_image')
                    ->alias('a')
                    ->field('a.image,b.house_id,
                                      b.house_name,b.property_right,
                                      b.dili,b.mix_mianji,
                                      b.max_mianji,b.xiaoshou_zt,
                                      b.decorate,b.junjia,b.shoufu')
                    ->join('left join house_info b ON a.house_id = b.house_id')
                    ->where($map)
                    ->limit($Page->firstRow . ',' . $Page->listRows)
                    ->select();
        } elseif ($id) {
            $list_region = M("region")->field('region_id')->select();
            $re_list = array();
            foreach ($list_region as $key => $value) {
                array_push($re_list, $value['region_id']);
            }
            $map = $map1 = array();
            $map["b.region_id"] = array('in', $re_list);
            $map["a.img_class"] = array('eq', 'face');

            $map1["region_id"] = array('in', $re_list);
            $count = M('house_info')->where($map1)->count();
            $Page = new Page($count, 4);
            $show = $Page->show();

            $list_house_info = M('house_image')
                    ->alias('a')
                    ->field('a.image,b.house_id,
                                      b.house_name,b.property_right,
                                      b.dili,b.mix_mianji,
                                      b.max_mianji,b.xiaoshou_zt,
                                      b.decorate,b.junjia,b.shoufu')
                    ->join('left join house_info b ON a.house_id = b.house_id')
                    ->where($map)
                    ->limit($Page->firstRow . ',' . $Page->listRows)
                    ->select();
        } else {
            //分页展示
            $count = M('house_info')->count();
            $Page = new Page($count, 4);
            $show = $Page->show();
            $list_house_info = M('house_image')
                    ->alias('a')
                    ->field('a.image,b.house_id,
                                      b.house_name,b.property_right,
                                      b.dili,b.mix_mianji,
                                      b.max_mianji,b.xiaoshou_zt,
                                      b.decorate,b.junjia,b.shoufu')
                    ->join('left join house_info b ON a.house_id = b.house_id')
                    ->where("a.img_class='face'")
                    ->limit($Page->firstRow . ',' . $Page->listRows)
                    ->select();
        }
        
        $city_list = M('region')->field('region_id,region_name')->where("level=2")->select();;
        $this->assign('city_list', $city_list);  
        $next_city_list = M('region')->field('region_id,region_name')->where("level=3")->select();;
        $this->assign('next_city_list', $next_city_list);          
        $this->assign('page', $show); // 赋值分页输出
        $this->assign("list", $list_house_info);

        $this->display();
    }
}