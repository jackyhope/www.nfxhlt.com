<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/30
 * Time: 15:34
 */
namespace app\home\controller;
use think\Db;

class Server extends  Base {
    public  function index(){
        //服务保障页图片的查询，按表picture中source字段索引
        $indexPicture = Db::name('picture')->where('belong','server')->select();
        $list = array();
        foreach ($indexPicture as $k =>$v ){
            $v['urlposition'] = '/static'.$v['urlposition'].$v['name'];
            $list[$v['source']] = $v['urlposition'];
        }
        //服务页标题，按表title中model字段索引
        $serverTitle = Db::name('title')->where('model',3) ->select();
        //服务监督，按表server中全部查询
        $serverTable = Db::name('service') -> select();



        $this->assign('serverTable',$serverTable);
        $this->assign('serverTitle',$serverTitle);
        $this->assign('list',$list);
        return $this->fetch();
    }
}