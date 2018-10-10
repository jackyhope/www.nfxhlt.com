<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/3
 * Time: 16:18
 */
namespace app\home\controller;

class Fast extends Base{
    public function index(){
	//dump(db('website')->select());
	//db('website')->where('id',6)->update(['sitename'=>'Fast']);
        return $this->fetch();
    }
}