<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/8
 * Time: 10:06
 */
namespace app\admin\controller;
use think\Controller;

class Base extends Controller{
    public function  _initialize(){
        $account = session('account');
        if(!$account){
            $this->redirect('admin/login/index');
        }
    }
}