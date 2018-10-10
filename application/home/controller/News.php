<?php
namespace app\home\controller;

use think\Db;

class News extends Base
{
    public function index()
    {

        //联表查询企业新闻附带缩略图的6条数据 + 企业新闻详情8条
        $cnewsR = Db::query("select n.Id nid,n.png_id,n.type,n.isrecommand,n.title,n.time,p.Id pid, p.name,p.subscribe,p.urlposition from off_news n LEFT JOIN off_picture p ON  n.png_id = p.Id 
                  where n.type = 1 and n.isrecommand = 1 order by n.time desc");
        $cnewsD = Db::name('news') -> where('type',1) ->order('time desc')->limit('8')-> select();

	$cnewsM = Db::query("select n.Id nid,n.png_id,n.type,n.isrecommand,n.title,n.time,n.content,p.Id pid, p.name,p.subscribe,p.urlposition from off_news n LEFT JOIN off_picture p ON  n.png_id = p.Id
                  where n.type = 1 order by n.time desc");

        //联表查询行业资讯附带缩略图的6条数据 + 行业资讯详情8条
        $inewsR = Db::query('select n.Id nid,n.png_id,n.type,n.isrecommand,n.title,n.time,p.Id pid,p.name,p.subscribe,p.urlposition from off_news n LEFT JOIN off_picture p ON  n.png_id = p.Id 
                  where n.type =2 and n.isrecommand =1 order by n.time DESC ');
        $inewsD = Db::name('news') -> where('type',2) ->order('time desc')->limit('8')-> select();

	$inewsM =Db::query('select n.Id nid,n.png_id,n.type,n.isrecommand,n.title,n.time,p.Id pid,p.name,p.subscribe,p.urlposition from off_news n LEFT JOIN off_picture p ON  n.png_id = p.Id
                  where n.type =2 order by n.time DESC ');

        $this->assign('cnewsP',$cnewsR);
        $this->assign('cnewsD',$cnewsD);
        $this->assign('inewsP',$inewsR);
        $this->assign('inewsD',$inewsD);
	$this->assign('cnewsM',$cnewsM);
        $this->assign('inewsM',$inewsM);


        $list = Db::name('picture') ->field('name')->field('urlposition')-> where('belong','news')->where('source','banner')->select();
        $list['banner'] = '/static'.$list[0]['urlposition'].$list[0]['name'];
        $this -> assign('list',$list['banner']);
        return $this->fetch();


    }

	//ajax显示企业新闻分页
   //分页函数
    public function news($pageNum = 1,$pageSize = 6,$type =1){
        $sql = "select n.Id nid,n.png_id,n.type,n.isrecommand,n.title,n.time,p.Id pid, p.name,p.subscribe,p.urlposition from off_news n LEFT JOIN 
                off_picture p ON n.png_id = p.Id where n.type = ".$type." order by n.time DESC limit ".($pageNum-1)*$pageSize.",".$pageSize;
        return $array = Db::query($sql);
    }

    //显示总的页数
    public function totalpage($type = 1,$pageSize = 6){
        $total = Db::name('news')-> where('type',$type) -> count();
        return  ($total%$pageSize) == 0 ? ($total/$pageSize) : intval($total/$pageSize)+1;
    }

    //异步刷新技术_企业新闻
    public function cnew(){
        $pageNumC = empty($_GET['pageNumC']) ? 1 : intval( $_GET['pageNumC'] );
        $pageSize = 6 ;
        @$ctotal = $this->totalpage(1,$pageSize);
        $cnewsR = $this->news($pageNumC,$pageSize,1);
        echo json_encode($cnewsR);
    }
    //异步刷新技术_行业资讯
    public function inew(){
        $pageNumI = empty($_GET['pageNumI']) ? 1 : intval( $_GET['pageNumI'] );
        $pageSize = 6;
        @$itotal = $this->totalpage(2,$pageSize);
        $inewsR = $this->news($pageNumI,$pageSize,2);
        echo json_encode($inewsR);
        echo json_encode($pageNumI);
    }

    //ajax显示企业新闻分页
    public function show(){
        $pageNumC = empty($_GET['pageNumC']) ? 1 : intval( $_GET['pageNumC'] );
        $pageSize = 6 ;
        @$ctotal = $this->totalpage(1,$pageSize);

        if($pageNumC < 2)
            $pageNumC = 1;
        if($pageNumC>=$ctotal)
            $pageNumC = $ctotal;

        $next = $pageNumC + 1;
        $before = $pageNumC - 1;
        $cnewsR = $this->news($pageNumC,$pageSize,1);
        $html = "<span >企业新闻</span>";
        foreach ($cnewsR as $k => $v){
            $html .="<div><img onclick='tonews(this)' src='/static".$v['urlposition'].$v['name']."'"." title='".$v['title']."'"." alt='/home/detail/index?newsid=".$v['nid']."'></div>";
        }
        $html .="<nav class='news-nav'><ul><li><a href='javascript:flex(1);'><img src='/static/images/after10.png' ></a></li><li><a href='javascript:flex($before)'><img src='/static/images/front.png'></a></li><li><a href='javascript:flex($next)'><img src='/static/images/after.png'></a></li><li><a href='javascript:flex($ctotal);'><img src='/static/images/front10.png'></a></li></ul></nav>";

        echo $html;
    }
    //ajax显示行业新闻分页
    public function ishow(){
        $pageNumI = empty($_GET['pageNumI']) ? 1 : intval( $_GET['pageNumI'] );
        $pageSize = 6 ;
        @$itotal = $this->totalpage(2,$pageSize);
        if($pageNumI < 2)
            $pageNumI = 1;
        if($pageNumI>=$itotal)
            $pageNumI = $itotal;
        $next = $pageNumI + 1;
        $before = $pageNumI - 1;
        $inewsR = $this->news($pageNumI,$pageSize,2);
        $html = "<span >行业资讯</span>";
        foreach ($inewsR as $k => $v){
            $html .="<div><img onclick='tonews(this)' src='/static".$v['urlposition'].$v['name']."'"." title='".$v['title']."'"." alt='/home/detail/index?newsid=".$v['nid']."'></div>";
        }
        $html .="<nav class='news-nav'><ul><li><a href='javascript:iflex(1);'><img src='/static/images/after10.png' ></a></li><li><a href='javascript:iflex($before)'><img src='/static/images/front.png'></a></li><li><a href='javascript:iflex($next)'><img src='/static/images/after.png'></a></li><li><a href='javascript:iflex($itotal);'><img src='/static/images/front10.png'></a></li></ul></nav>";
        echo $html;
    }
}
