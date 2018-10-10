<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 14:22
 */
namespace app\admin\controller;
use think\Db;
use think\Request;

class  Hunter extends Base{
    public function index(){
        return $this->fetch();
    }

    //展示首页猎头图片
    public function tuijian(){
        $list = Db::name('picture') -> where('source','like','%person%')->where('belong','index')->select();
        $this->assign('list',$list);
        return $this->fetch();
    }

    //完成修改跳转展示页
    public  function  modify(){
        $request = Request::instance();
        $id = \BaseUtils::getStr($request->post('id'),'int');
        $urlposition = \BaseUtils::getStr($request -> post('url'));
        $ename = \BaseUtils::getStr($request -> post('ename'));
        $cname = \BaseUtils::getStr($request -> post('cname'));

        $pic = $_FILES['file'];
        //得到文件名称
        $pname = $pic['name'];
        $pname = iconv('UTF-8','GBK',$pname);
        $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/index/'; //上传文件的存放路径
	
        //开始移动文件到相应的文件夹
        if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
            if(empty($urlposition)){
                $urlposition = '/images/index/';
            }
            $arr = array('name'=>iconv('GBK','UTF-8',$pname),'subscribe'=>$ename.'/'.$cname,'urlposition'=>$urlposition);
            //更新插入的图片
            Db::name('picture') -> where('Id',$id) -> update($arr);
            $this->success('Successfully','admin/hunter/tuijian');
        }else{
            $this ->error('Failed!!','admin/hunter/tuijian');
        }
    }

    //处理添加图片的post请求
    public function doadd(){
        $ename = $this->request->post('ename');
        $cname = $this->request->post('cname');
        //获取上传的文件名
        $pic = $_FILES['file'];
        //得到文件名称
        $pname = $pic['name'];
        $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/index/'; //上传文件的存放路径
        //开始移动文件到相应的文件夹
        $pname = iconv("UTF-8","GBK",$pname);
        if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
            if(empty($urlposition)){
                $urlposition = '/images/index/';
            }
            $arr = array('name'=>iconv("GBK",'UTF-8',$pname),'subscribe'=>$ename.'/'.$cname,'urlposition'=>$urlposition,'time'=>date('y-m-d h:i:s',time()),'source'=>'person','belong'=>'index');
            //插入数据库
//            Db::name('picture') -> where('Id',$id) -> update($arr);
//            Db::name('picture') ->
            Db::name('picture')->insert($arr);
            $this->success('Successfully','admin/hunter/tuijian');
        }else{
            $this ->error('Failed!!','admin/hunter/tuijian');
        }
    }

    //跳转修改页
    public function edit(){
        $list = Db::name('picture') -> where('source','like','%person%')->where('belong','index')-> where('id',$this->request->get('id'))->find();
        $tempArr = explode('/',$list['subscribe']);
        $list['en'] = $tempArr[0];
        $list['ch'] = $tempArr[1];
        $this -> assign('list',$list);
        return $this->fetch();
    }

    //跳转添加图片页面
    public function add(){
        return $this->fetch();
    }

}