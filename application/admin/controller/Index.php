<?php
namespace app\admin\controller;
use think\Db;
use think\Exception;
use think\Request;

class Index extends Base
{
    public function index()
    {        
       	return $this->fetch();
    }
    //进入网站SEO
    public function keywords(){
        //网站SEO设置
        $data =  Db::name('website') -> select();
        $this -> assign('data',$data);
        return $this->fetch();
    }
    //网站SEOAjax修整
    public function modify(){
        $site = $this->request->get("site");
        $title = $this -> request ->get('title');
        $key = $this -> request ->get('key');
        $describe = $this->request->get('describe');
        $arr = array('SEOtitle'=>$title,'SEOkeyword'=>$key,'SEOsubscribe'=>$describe);
        try{
        Db::name('website')->where('sitename',$site) ->update($arr);
        }catch (Exception $e){
            echo '操作失败';
        }
        echo '操作成功';
    }

    public function edit(){
        $acname = \BaseUtils::getStr(input('get.ac'));
        $this->assign('acname',$acname);
        return $this->fetch();
    }
    //展示友情链接
    public function friendlyurl(){
        $list = Db::name('friendlyurl') -> select();
        $this -> assign('list',$list);
        return $this->fetch();
    }
    //url友情链接修改
    public function doediturl(){
        $id = $this ->request ->get('id');
        $name = $this ->request ->get('name');
        $url = $this ->request ->get('url');
        $arr = array('name'=>$name,'url'=>$url);
        try{
            Db::name('friendlyurl') ->where('Id',$id) -> update($arr);
        }catch (Exception $e){
            echo '操作失败';
        }
        echo '操作成功';
    }
    //添加url
    public function addurl(){
        $name = $this->request -> post('name');
        $url = $this->request -> post('url');
        $arr = array('name'=>$name,'url'=>$url);
        try{
            Db::name('friendlyurl') ->insert($arr);
        }catch (Exception $e){
            $this ->error('操作失败！！！','admin/index/edit');
        }
        return $this->redirect('admin/index/friendlyurl');
    }
    //url友情链接删除
    public function dodeleteurl(){
        $id = $this ->request ->get('id');
        try{
            Db::name('friendlyurl') ->where('Id',$id) ->delete();
        }catch (Exception $e){
            echo '操作失败';
        }
        echo '操作成功';
    }
}
