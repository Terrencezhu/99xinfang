<?php
namespace Back\Controller;
use Think\Controller;
use Think\Page;
use Think\Upload;
header("Content-type:text/html;charset=utf-8");
/*楼盘信息添加
 *
 */
class LptxtController extends Controller {


	public function __construct() {
        parent::__construct();

        if (empty($_SESSION['admin_user_info'])) {

            $this->error('请先登陆', U('Login/join'));
            exit;
        } else if (!$_SESSION['admin_user_info']['power_info']['lptxt']) {

            $this->error('没有访问权限', U('Admin/adminlist'));
            exit;
        }
    }

    public function lpadd(){


        $listObj = M('region');
        $whereprovince['parent_id'] = 0;
        $listprovince = $listObj->where($whereprovince)->select();
       	
       	$this->assign("province_list",$listprovince);
        //$this->display();

    //判断添加信息是否为空
        $house_info = M('house_info');

        if (IS_POST) {
        	 //判断添加信息是否为空
	        if (!$_POST['province_id']) {
	            $this->error('请先选择楼盘区域');
	            exit;
	        }
	        
	        if (!$_POST['house_name']) {

	            $this->error('楼盘名称不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['wuye_type']) {
	            $this->error('物业类型不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['build_type']) {
	            $this->error('建筑类型不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['developer']) {
	            $this->error('开发商不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['dili']) {
	            $this->error('地理位置不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['mix_price']) {
	            $this->error('最低价不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['max_price']) {
	            $this->error('最高价不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['junjia']) {
	            $this->error('均价不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['shoufu']) {
	            $this->error('首付不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['youhuixinxi']) {
	            $this->error('优惠信息不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['first_time']) {
	            $this->error('请添加开盘时间！！');
	            exit;
	        }

	        if (!$_POST['last_time']) {
	            $this->error('请添加交房时间！！');
	            exit;
	        }

	        if (!$_POST['max_mianji']) {
	            $this->error('最大面积不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['mix_mianji']) {
	            $this->error('最小面积不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['property_right']) {
	            $this->error('产权年限不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['wuye']) {
	            $this->error('物业公司不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['wuye_price']) {
	            $this->error('物业费不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['gongnuan']) {
	            $this->error('供暖方式不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['car']) {
	            $this->error('车位情况不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['rongjilv']) {
	            $this->error('容积率不能为空！请重新添加！');
	            exit;
	        }


	        if (!$_POST['decorate']) {
	            $this->error('装修状况不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['green']) {
	            $this->error('绿化率不能为空！请重新添加！');
	            exit;
	        }

	        if (!$_POST['xiaoshou_zt']) {
	            $this->error('销售状态不能为空！请重新添加！');
	            exit;
	        } 

	        if (!$_POST['house_jianjie']) {
	            $this->error('楼盘简介不能为空！请重新添加！');
	            exit;
	        }

	        $data['house_name'] = $_POST['house_name'];
	        $data['house_address'] = $_POST['house_address'];
	        $data['wuye_type'] = $_POST['wuye_type'];
	        $data['build_type'] = $_POST['build_type'];
	        $data['developer'] = $_POST['developer'];
	        $data['dili'] = $_POST['dili'];
	        $data['mix_price'] = $_POST['mix_price'];
	        $data['max_price'] = $_POST['max_price'];
	        $data['junjia'] = $_POST['junjia'];
	        $data['shoufu'] = $_POST['shoufu'];
	        $data['youhuixinxi'] = $_POST['youhuixinxi'];
	        $data['first_time'] = $_POST['first_time'];
	        $data['last_time'] = $_POST['last_time'];
	        $data['max_mianji'] = $_POST['max_mianji'];
	        $data['mix_mianji'] = $_POST['mix_mianji'];
	        $data['property_right'] = $_POST['property_right'];
	        $data['wuye'] = $_POST['wuye'];
	        $data['wuye_price'] = $_POST['wuye_price'];
	        $data['gongnuan'] = $_POST['gongnuan'];
	        $data['car'] = $_POST['car'];
	        $data['rongjilv'] = $_POST['rongjilv'];
	        $data['decorate'] = $_POST['decorate'];
	        $data['green'] = $_POST['green'];
	        $data['xiaoshou_zt'] = $_POST['xiaoshou_zt'];
	        $data['house_jianjie'] = $_POST['house_jianjie'];
	        $data['tel'] = $_POST['tel'];


/*
 *地区选择 判断                    
 */

	        if ($_POST['province_id']) {

	        	if ($_POST['city_id']) {
	        	 	$data['region_id'] = $_POST['district_id']?:$_POST['city_id'];
	        	}
	        }


	        $info = $house_info->add($data);

	        if ($info) {
	        	$this->success('添加成功！','lpadd');
	        } else {

	        	$this->error('添加失败！请重新添加！');
           		exit;
	        }

        } else {
        	$this->display();
        }

    }

    //获取第二级
    public function get_city(){
        $listObj = M('region');
        $where['parent_id'] = I('province_id');
        $where['level'] = 2;
        $list = $listObj->where($where)->select();
        $data=array('status'=>0,'city'=>$list);
        header("Content-type: application/json");
        exit(json_encode($data));
    }
    
    //获取第三级
    public function get_district(){
        $listObj = M('region');
        $where['parent_id'] = I('city_id');
        $where['level'] = 3;
        $list = $listObj->where($where)->select();
        $data=array('status'=>0,'district'=>$list);
        header("Content-type: application/json");
        exit(json_encode($data));
    }

    /*
     *楼盘图片添加
     */
    //楼盘图片批量添加
    public function lpimg(){
    	//获取楼盘信息
    	$house_list = M('house_info');
    	$housename = $house_list->field('house_id, house_name')->select();

		if (IS_POST) {
			$lpimg = M('house_image');
			$upload = new Upload();
			$upload->maxSize  = 10*1024*1024;// 设置附件上传大小
	        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	        $upload->rootPath = './Upload/lpimg/';
	        $upload->savePath = $savePath;
	      //  $upload->saveName = array('uniqid','');
	        $info = $upload->Upload();
	        // echo '<pre>'; var_dump($info);die;
			// var_dump($_FILES);die;

 			if ($info) {
 				$flag = 0;
 				foreach ($info as $key => $value) {
 						$map = array();
						if ($flag == 0 && $_POST['img_class'] !='ptt' && $_POST['img_class'] !='face') {
						 		$map['img_face'] = 1;
						 	} 
						 	$flag++;
						if ($_POST['img_class']== "face"){
                             if((count($info) != 1)){
                                 $this->error('封面图只能添加一张！');
						 	     exit;
                             }
						 }
						if ($_POST['houselist_id']== "0" || $_POST['img_class'] == "0"){
						 	$this->error('请选择楼盘或者类型！');
						 	exit;
						 }
 						$map['house_id'] = $_POST['houselist_id'];
 						$map['img_class'] = $_POST['img_class'];
 						$map['image'] = $value['savepath'].$value['savename'];
 						$num = $lpimg->add($map);
			 					
 				}
 				
				if ($num) {
					$this->success('添加图片成功！', 'lpimg');
				} else {

	        	$this->error('添加失败！请重新添加！');
           		exit;
	       		}
 				
 			} else {

 				$this->error('添加失败！请重新添加！');
			    exit;
 			}
		
       	} else {
       		$this->assign("houselist_name", $housename);
			$this->display();
       	}

    }


    // if(!$info) {// 上传错误提示错误信息
    //     $this->error($upload->getError());
    // }else{// 上传成功 获取上传文件信息
    //     $pathArr = array();
    //     foreach($info as $file){
    //         array_push($pathArr, "Public/Uploads/".$file['savepath'].$file['savename']);
    //     }
    //     echo json_encode($pathArr);
    // }


    public function lphxt(){
    	//获取楼盘名
    	$house_list = M('house_info');
    	$housename = $house_list->field('house_id, house_name')->select();
    	//实例化户型图
    	if (IS_POST) {


   			//var_dump($data);
			//户型图上传
			$upload = new Upload();
			$upload->maxSize  = 10*1024*1024;// 设置附件上传大小
	        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	        $upload->rootPath = './Upload/lphxt/';
	        $upload->savePath = $savePath;
	        $up = $upload->Upload();

	        // var_dump($up);die;
    		// $data = array();
    		$house_hximg = M('house_hximg');
    		foreach ($up as $key => $value) {
    			if ($_POST['houselist_id']== "0"){

						 	$this->error('请选择楼盘');
						 	exit;
				 }
	   			$data['house_id']=$_POST['houselist_id'];
	   			$data['hx_name']=$_POST['hx_name'];
	   			$data['hx_mianji']=$_POST['hx_mianji'];
	   			$data['jushi']=$_POST['jushi'];
	   			$data['ck_price']=$_POST['ck_price'];
	   			$data['ck_shoufu']=$_POST['ck_shoufu'];
	   			$data['hx_mianji']=$_POST['hx_mianji'];
	   			$data['hx_img']= $value['savepath'].$value['savename'];
				
				// var_dump($data);die;
				$info = $house_hximg->add($data);
    		}
			
			if ($info) {

				$this->success('户型图信息添加成功！', 'lphxt');
			
			} else {
				$this->error('添加失败！请重新添加！');
				exit;
			}

    	} else {
    		$this->assign("houselist_name", $housename);
    		$this->display();
    	}
    }
 
    /*
     *楼盘信息编辑
     */

    public function lpedit(){

    	$m_houseinfo = M('house_info');

    	$count = $m_houseinfo->count();//查询总记录数
    	$Page  = new Page($count,8);
    	$show  = $Page->show();
    	$listhouse = $m_houseinfo->limit($Page->firstRow.','.$Page->listRows)->select();

    	$this->assign("page",$show);
		$this->assign("house_list",$listhouse);
    	$this->display();
    }

    public function lpdel(){
	
    }
 }