<?php
namespace app\home\controller;

use think\Db;

class About extends Base
{
    public function index()
    {
        //关于我们图片的查询，按表picture中source字段索引
        $indexPicture = Db::name('picture')->where('belong','about')->select();
        $list = array();
        foreach ($indexPicture as $k =>$v ){
            $v['urlposition'] = '/static'.$v['urlposition'].$v['name'];
            $list[$v['source']] = $v['urlposition'];
        }
        //关于我们标题的查询，按表title中按model字段索引
        $indexTitle = Db::name('title') -> where('model',2) -> select();


        $this->assign('abouttitle',$indexTitle);
        $this->assign('list',$list);
        return $this->fetch();
    }
}
