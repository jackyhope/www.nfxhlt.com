<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-08-08
 * Time: 17:38
 */

namespace app\home\controller;
use think\Db;
use think\Request;

class Detail extends Base
{

    //数据库访问压力加大了
    public function index(){
        $request = Request::instance();
        $id = \BaseUtils::getStr(input('get.newsid'),'int');

        if($request->get('orientation')){
            $flag = $request->get('orientation');
            if('last'== $flag){
                $id = $id + 1;
                $sql = "select n.Id nid,n.png_id,n.title,n.subtitle,n.source,n.writer,n.time time1,n.type,n.url,n.content,
                p.Id pid,p.name,p.subscribe,p.urlposition,p.time,p.source,p.belong
                from off_news n , off_picture p WHERE n.png_id = p.Id AND n.Id =".$id;
                $arr = Db::query($sql) ;
                if(empty($arr)){
                    $id = $id - 1;
                    $sql = "select n.Id nid,n.png_id,n.title,n.subtitle,n.source,n.writer,n.time time1,n.type,n.url,n.content,
                p.Id pid,p.name,p.subscribe,p.urlposition,p.time,p.source,p.belong
                from off_news n , off_picture p WHERE n.png_id = p.Id AND n.Id =".$id;
                    $arr = Db::query($sql) ;
                }
            }else{
                $id = $id - 1;
                $sql = "select n.Id nid,n.png_id,n.title,n.subtitle,n.source,n.writer,n.time time1,n.type,n.url,n.content,
                p.Id pid,p.name,p.subscribe,p.urlposition,p.time,p.source,p.belong
                from off_news n , off_picture p WHERE n.png_id = p.Id AND n.Id =".$id;
                $arr = Db::query($sql) ;
                if(empty($arr)){
                    $id = $id + 1;
                    $sql = "select n.Id nid,n.png_id,n.title,n.subtitle,n.source,n.writer,n.time time1,n.type,n.url,n.content,
                p.Id pid,p.name,p.subscribe,p.urlposition,p.time,p.source,p.belong
                from off_news n , off_picture p WHERE n.png_id = p.Id AND n.Id =".$id;
                    $arr = Db::query($sql) ;
                }
            }
        }else{
            $sql = "select n.Id nid,n.png_id,n.title,n.subtitle,n.source,n.writer,n.time time1,n.type,n.url,n.content,
                p.Id pid,p.name,p.subscribe,p.urlposition,p.time,p.source,p.belong
                from off_news n , off_picture p WHERE n.png_id = p.Id AND n.Id =".$id;
            $arr = Db::query($sql) ;
        }

        //替换图片路径
      //  $arr['0']['content'] = str_replace("upload/","../../upload/",$arr['0']['content']);
	$arr['0']['content'] = str_replace("upload/","/upload/",$arr['0']['content']);
$arr['0']['content']  = str_replace('img src','img style="max-width:95%;height:auto;" src',$arr['0']['content']);

//        print_r($arr);
        $this -> assign('list',$arr);
	//dump($arr);
	//dump(db('news')->where('id',49)->delete());
        return $this -> fetch();
    }
}