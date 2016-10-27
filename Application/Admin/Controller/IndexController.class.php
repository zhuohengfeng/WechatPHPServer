<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $test =  '1234';

        $this->assign('test',$test);
        $this->display();
    }
}