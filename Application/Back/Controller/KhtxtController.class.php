<?php

namespace Back\Controller;

use Think\Controller;
use Think\Upload;

//header("Content-type:text/html;charset=utf-8");

class KhtxtController extends Controller {


    public function __construct() {
        parent::__construct();

        if (empty($_SESSION['admin_user_info'])) {

            $this->error('请先登陆', U('Login/join'));
            exit;
        }
    }

	public function index()
	{
		$this->display();
	}
}