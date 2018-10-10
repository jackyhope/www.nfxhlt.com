<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/2
 * Time: 11:53
 */
namespace app\admin\controller;
use think\Db;

class Image extends Base{

    //后台图像页
    public function index(){
        return $this->fetch();
    }

    //展示banner
    public function banner(){
        $list = Db::name('picture') -> where('source','banner') -> select();
        $this-> assign('list',$list);
        return $this->fetch();
    }
    public function logo(){
        return $this->fetch();
    }
    //展示图片中心
    public function imgcenter(){
        $list = Db::name('picture') -> where('source','like','%picture%') ->where('belong','index') -> select();
//        print_r($list);

        $this -> assign('list',$list);
        return $this->fetch();
    }

    //展示创始人图片，标注ID
    public function createrimg(){
        $list =  Db::name('picture') -> where('source','founder') ->where('belong','about') -> find();
        $this->assign('list',$list);
        return $this->fetch();
    }
    //修改创始人图片
    public function modifycreater(){
        $id = $this->request->post('id');
        $pic = $_FILES['file'];
        //得到文件名称
        $pname = $pic['name'];
        $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/aboutus/'; //上传文件的存放路径
        //开始移动文件到相应的文件夹
        print_r($upload_path);
        if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
            $arr = array('name'=>$pname);
            //更新插入的图片
            Db::name('picture') -> where('Id',$id) -> update($arr);
            $this->success('Successfully','admin/image/createrimg');
        }else{
            $this ->error('Failed!!','admin/image/createrimg');
        }
    }
    //取出QQ图
    public function qqcode(){
        $list = Db::name('picture') -> where('source','qq') -> where('belong','detail')->find();
        //print_r($list);

        $this->assign('list',$list);
        return $this->fetch();
    }
    //QQ图片修改
    public function doqqcode(){
        $id = $this->request->post('id');
        $pic = $_FILES['file'];
        //得到文件名称
        $pname = $pic['name'];
        $pname = iconv('UTF-8','GBK',$pname);
        $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/twobarcode/'; //上传文件的存放路径
        //开始移动文件到相应的文件夹
        //print_r($upload_path);
        if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
            $arr = array('name'=>iconv('GBK','UTF-8',$pname));
            //更新插入的图片
            Db::name('picture') -> where('Id',$id) -> update($arr);
            $this->success('Successfully','admin/image/qqcode');
        }else{
            $this ->error('Failed!!','admin/image/qqcode');
        }

    }

    public function wechatcode(){
        $list = Db::name('picture') -> where('source','wechat') -> where('belong','detail')->find();
        $this->assign('list',$list);
        return $this->fetch();
    }
    //微信图片修改
    public function dowechat(){
        $id = $this->request->post('id');
        $pic = $_FILES['file'];
        //得到文件名称
        $pname = $pic['name'];
        $pname = iconv('UTF-8','GBK',$pname);
        $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/twobarcode/'; //上传文件的存放路径
        //开始移动文件到相应的文件夹
        //print_r($upload_path);
        if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
            $arr = array('name'=>iconv('GBK','UTF-8',$pname));
            //更新插入的图片
            Db::name('picture') -> where('Id',$id) -> update($arr);
            $this->success('Successfully','admin/image/wechatcode');
        }else{
            $this ->error('Failed!!','admin/image/wechatcode');
        }
    }
    public function add(){
        return $this->fetch();
    }

    //取出所要修改的图
    public function edit(){
        $id = $this->request->get('id');
        $list = Db::name('picture') -> where('Id',$id) -> find();
        $this -> assign('list',$list);
        return $this->fetch();
    }
    //改图
    public function doedit(){
        $id = $this->request->post('id');
        $pic = $_FILES['file'];
        //得到文件名称
        $pname = $pic['name'];
        $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/index/'; //上传文件的存放路径
        //开始移动文件到相应的文件夹
        print_r($upload_path);
        if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
            $arr = array('name'=>$pname);
            //更新插入的图片
            Db::name('picture') -> where('Id',$id) -> update($arr);
            $this->success('Successfully','admin/image/imgcenter');
        }else{
            $this ->error('Failed!!','admin/image/imgcenter');
        }


        //  a图片的编辑，我们开发些没什么用的一些功能，浪费了一心思额时间和劳力
        //  安卓和iOS系统，只是未知数，手机App
    }
}