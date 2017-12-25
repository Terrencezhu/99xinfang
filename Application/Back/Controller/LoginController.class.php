<?php

namespace Back\Controller;
use Think\Controller;
/*登陆*/
class LoginController extends Controller 
{   
	/*登陆页面*/
    public function join()
    {
        // echo '/index.php?m=Back&c=Login&a=loginOut';
        // die;
		$this->display();
    }
    /*登陆判断*/
    public function check()
    {
    	if(!empty($_POST)) {
    		$model = M('admin_user');
    		$where['name'] = $_POST['name'];
    		$result = $model->where($where)->find();
    		// echo '<pre>';
    		// var_dump($result);die;
    		if (!$result) {
    			$this->error('账号不存在');
    			exit;
    		}
    		if ($result['password'] != $_POST['password']) {
    			
    			$this->error('密码错误');
    			exit;
    		} else {

    			$model_a = M('admin_power');
    			$where_a['id'] = $result['power_id'];
    			$result_a = $model_a->where($where_a)->find();
    			$result['power_info'] = $result_a;
    			$_SESSION['admin_user_info'] = $result;
    			$this->success('登陆成功',U('Admin/adminlist'));
    		}
    	} else {
    		$this->display('Login/join');
    	}

    }
    /*注销*/
    public function loginOut()
    {
    	$_SESSION['admin_user_info'] = null;
        session_unset();
        $this->success('注销成功',U('Login/join'));
    }
}