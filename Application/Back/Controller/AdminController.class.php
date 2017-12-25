<?php

namespace Back\Controller;
use Think\Controller;
class AdminController extends Controller {


    public function __construct() {
        parent::__construct();

        if (empty($_SESSION['admin_user_info'])) {

            $this->error('请先登陆', U('Login/join'));
            exit;
        } 
    }

    public function adminlist(){

		$this->display();
    }
}