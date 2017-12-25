<?php

namespace Back\Controller;

use Think\Controller;
use Think\Upload;

//header("Content-type:text/html;charset=utf-8");

class MestxtController extends Controller {

	public function __construct() {
        parent::__construct();

        if (empty($_SESSION['admin_user_info'])) {

            $this->error('请先登陆', U('Login/join'));
            exit;
        } else if (!$_SESSION['admin_user_info']['power_info']['mestxt']) {

            $this->error('没有访问权限', U('Admin/adminlist'));
            exit;
        }
    }

	public function mesadd()
	{
		$this->display();
	}	

	public function mesedit()
	{
		$this->display();
	}
}