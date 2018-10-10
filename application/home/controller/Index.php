<?php
namespace app\home\controller;
use think\Db;

class Index extends Base
{
//  index/controller
    public function index()
    {
        //首页图片的查询，按表picture中source字段索引
        $indexPicture = Db::name('picture')->where('belong','index')->select();
        $list = array();
        foreach ($indexPicture as $k =>$v ){
            $v['urlposition'] = '../../static'.$v['urlposition'].$v['name'];
            $list[$v['source']] = $v['urlposition'];
        }
        //首页标题，按表title中model字段索引
        $indexTitle = Db::name('title')->where('model',1) -> select();

        //首页新闻资讯
        $indexNews = Db::name('news') -> where('type',2) ->order('time desc')->limit('10')-> select();
        $indexHnews = Db::name('news') -> where('type',1) ->order('time desc')->limit('10')-> select();
        $pic = Db::name('picture') -> where('belong','index') -> where('source','like','%person%') -> select();


        $this->assign('indexhnews',$indexHnews);
        $this->assign('indexnews',$indexNews);
        $this->assign('indextitle',$indexTitle);
        $this->assign('list',$list);
        $this->assign('pic',$pic);
        return $this->fetch();
    }
}
