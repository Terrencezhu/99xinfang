<?php

namespace Back\Controller;

use Think\Controller;
use Think\Page;
use Think\Upload;

//header("Content-type:text/html;charset=utf-8");

class KftxtController extends Controller {

    public function __construct() {
        parent::__construct();

        if (empty($_SESSION['admin_user_info'])) {

            $this->error('请先登陆', U('Login/join'));
            exit;
        } else if (!$_SESSION['admin_user_info']['power_info']['kftxt']) {

            $this->error('没有访问权限', U('Admin/adminlist'));
            exit;
        }
    }

	public function kfadd()
	{
		$counselor = M('counselor');
		if (IS_POST) {


		    $upload = new Upload();// 实例化上传类
	        $upload->maxSize  = 10*1024*1024;// 设置附件上传大小
	        $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	        $upload->rootPath = './Upload/Kftxt/';
	        $upload->savePath = $savePath;
	        $upload->saveName = array('uniqid','');
	        //$upload->autoSub  = true;
	        //$upload->subName  = array('date','Ymd');

	        $info   =   $upload->uploadOne($_FILES['tx']);
	        $_POST['image'] = $info['savepath'].$info['savename'];
	        
			 //echo '<pre>'; var_dump($_POST['image']); die;
	        $data['counselor_name'] = $_POST['name'];
	        $data['school'] = $_POST['school'];
	        $data['year'] = $_POST['years'];
	        $data['region'] = $_POST['region'];
	        $data['mark'] = $_POST['mark'];
	        $data['resume'] = $_POST['resume'];
	        $data['sex'] = ($_POST['sex']== 1 ) ? 1 : 2;
	        $data['c_img'] = $_POST['image'];
	        
       		$info = $counselor->add($data);
       		if ($info) {
       			$this->success('添加成功', 'kfadd');
       		} else {
       			$this->error('添加失败');
       		}

		
       	} else {

			$this->display();
       	}


	}

	public function kfedit()
	{

		$m_counselor = M('counselor');//实例化counselor数据对象
		$count = $m_counselor->count();//查询满足要求的总记录数
		$Page = new Page($count,8);//实例化分页，每页显示条数
		$show = $Page->show();//分页显示输出
		//当前页数据查询
		$listcounselor = $m_counselor->limit($Page->firstRow.','.$Page->listRows)->select();
		//获取信息数据并展示
		// $listcounselor = $m_counselor
		// 		   	   ->getField('counselor_name, 
		// 		   		 			 	      sex, 
		// 			   			           region');
		//$list = $m_counselor->where('status=1')->order('counselor_id')->limit($Page->firstRow.','.$Page->listRows)->select();

		$this->assign('page',$show);// 赋值分页输出
		$this->assign("counselor_list",$listcounselor);
		
		$this->display();
	}


}