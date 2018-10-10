<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31
 * Time: 9:16
 */
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Session;

class Login extends Controller {

    //进入后台管理登录界面
    public function index(){
        $this->assign('error','');
        return $this->fetch();
    }

    //账号密码的验证
    public  function  index2(){
        $request = Request::instance();
        if($request->post()){
            $account = \BaseUtils::getStr($request->post('account'));
	   $accountClean = preg_match('/^[a-z]+$/',$account);
            $password = \BaseUtils::getStr($request->post('password'));
	   $pass = md5(md5($password).'nfxh');
            //查询数据库
            $list = Db::name('user')->where(['name'=>$account,'password'=>$pass])->select();
            if($list && $accountClean){
                Session::set('account',$account);
                $this->assign('error','');
                $this->redirect('admin/index/index');
            }
            else{
                $this->assign('error','账号或者密码错误!!!');
                return $this->fetch('index');
            }
        }else{
            return "未知错误";
        }
    }

//修改密码
    public function modifypass(){
        //获取账户
        $name = Session::get('account');
        //根据post请求获取原始密码
        $oldPass = $this -> request -> post('oldpassword');
        $newPass = $this -> request -> post('newpassword');
        $oldpass = md5(md5($oldPass).'nfxh');
        $newpass = md5(md5($newPass).'nfxh');	
        $user = Db::name('user') -> where('name',$name) ->where('password' ,$oldpass) -> find();
        if(empty($user)){
            $this ->assign('error','原密码有误！');
            return $this ->fetch('reset');
        }else{
            $arr = array('password'=>$newpass);
            Db::name('user')-> where('name',$name)->update($arr);
            return $this->redirect('admin/index/index');
        }
    }

    //注销
    public function out(){
        Session::delete('account');
        $this->redirect('admin/login/index');
    }

    public function reset(){
        $this ->assign('error','');
        return $this->fetch();
    }

}