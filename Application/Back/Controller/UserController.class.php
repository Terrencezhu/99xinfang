<?php

namespace Back\Controller;

use Think\Controller;
//header("Content-type:text/html;charset=utf-8");

class UserController extends Controller {

	public function __construct() {
        parent::__construct();

        if (empty($_SESSION['admin_user_info'])) {

            $this->error('请先登陆', U('Login/join'));
            exit;
        } else if (!$_SESSION['admin_user_info']['power_info']['user']) {

            $this->error('没有访问权限', U('Admin/adminlist'));
            exit;
        }
    }

	public function index()
	{
		$user = M('admin_user');

		$userlist =  $user->getField('name, section, username, telphone');
		
		//echo '<pre>'; var_dump($userlist);die;

		$this->assign('userlist', $userlist);
		$this->display();
	}


}