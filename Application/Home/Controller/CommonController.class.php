<?php

namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class CommonController extends Controller {


	
	public function _initialize() {
		$region_top = M('region')
					->field('region_id,region_name')
					->where('level=1')
					->select();
			// var_dump($region_top);
			// die;
		
		//底部信息
		$house_name = M('house_info')
					->field('house_id,house_name')
					->select();


		$region_name = M('region')
					->field('region_id,region_name')
					->where('level=1')
					->select();

		$this->assign('house_name',$house_name);
		$this->assign('region_name',$region_name);
		$this->assign('region_top',$region_top);
    }
	
	public function addkehu(){
		$kehu = M('kehu');
		if (IS_POST) {
			    if (!$_POST['kehu_name']) {
	            $this->error('请填写姓名');
	            exit;
	        }
		}
		if (IS_POST) {
			    if (!$_POST['kehu_tel']) {
	            $this->error('请留下您的手机号');
	            exit;
	        }
		}
		$date['kehu_name'] = $_POST['kehu_name'];
		$date['kehu_tel'] = $_POST['kehu_tel'];
		$date['addtime'] = Date('Y-m-d H:i:s');
        $data = M('kehu')->add($date);
        if ($data) {
        	$this->error('添加成功！');
        }else{
            $this->success('添加失败！','Index/index');
        }
	}

}