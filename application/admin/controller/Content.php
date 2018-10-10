<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/2
 * Time: 8:51
 */
namespace app\admin\controller;
use think\Db;
use think\Request;

class Content extends Base {
    public function index(){
        return $this->fetch();
    }

  //企业新闻，增改展示
    public function newsqiye(){

        $cnews = Db::name('news') -> where('type',1) -> select();
        $this -> assign('cnews',$cnews);
        return $this->fetch();
    }
  //行业新闻，增改展示
    public function newshangye(){
        $cnews = Db::name('news') -> where('type',2) -> select();
        $this -> assign('cnews',$cnews);
        return $this->fetch();
    }
    //媒体报道
    public function newsmeiti(){
        $cnews = Db::name('news') -> where('type',1) -> select();
        $this -> assign('cnews',$cnews);
        return $this->fetch();
    }
/*
 * 新闻隐藏操作
 */
    public function newsdelete(){


        return $this->fetch();
    }

    public function wenhua(){
        $where['type'] = 'culture';
        $title = db('title')->where($where)->select();
        $this->assign('title',$title);
        return $this->fetch();
    }

    public function jianjie(){
        $where['type'] = 'jianjie';
        $list = db('title')->where($where)->select();
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function dibu(){
        $where['type'] = 'dibu';
        $list = db('title')->where($where)->select();
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function chengnuo(){
        $where['type'] = 'promiss';
        $title = db('title')->where($where)->select();
        $this->assign('title',$title);
        return $this->fetch();
    }
    public function jiandu(){
        $title = db('service')->select();
        $this->assign('list',$title);
        return $this->fetch();
    }

    //进入文章查看
    public function edit(){
        $ac = \BaseUtils::getStr(input('get.ac'));
        $bc = \BaseUtils::getStr(input('get.bc'));

        $id =\BaseUtils::getStr( $this->request->get('id'),'int');
        $current = Db::name('news') ->where('Id',$id) -> find();
        $picsimg = Db::name('picture') -> field('name') ->field('urlposition') -> where('Id',$current['png_id']) -> find();
        $picbgimg = Db::name('picture') ->field('name') ->field('urlposition') -> where('Id',$current['bg_id']) -> find();
        $this -> assign('simg',$picsimg);
        $this -> assign('bgimg',$picbgimg);
        $this -> assign('current',$current);

        $this->assign('bc',$bc);
        $this->assign('ac',$ac);

        return $this->fetch();
    }
    //编辑指定的文章
    public function successedit(){
        $request = Request::instance();
        $ac = \BaseUtils::getStr($request->get('ac'),'string');
        $bc = \BaseUtils::getStr($request->get('bc'));
        $id = \BaseUtils::getStr($request ->post('id'));
        $title = \BaseUtils::getStr($request ->post('title'));
        $subtitle = \BaseUtils::getStr($request ->post('subtitle'));
        $source = \BaseUtils::getStr($request ->post('source'));
        $writer = \BaseUtils::getStr($request ->post('writer'));
        $url = \BaseUtils::getStr($request ->post('url'));
        $content = \BaseUtils::getStr($request ->post('content'));

        //背景图
        $pic = $_FILES['bgimg'];
        $pname = $pic['name'];;
        //缩略图
        $pic1 = $_FILES['simg'];
        $pname1 = $pic1['name'];


        if($ac == 'newsqiye'){
            if(!empty($bc)){//企业新闻修改
                /*转移图片*/
                /*图片的添加*/
                //上传文件的存放路径
	       $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/news/';
                //开始移动文件到相应的文件夹
                $pname1 = iconv("UTF-8","GBK",$pname1);
                $pname = iconv("UTF-8","GBK",$pname); //背景图
                if(move_uploaded_file($pic1['tmp_name'],$upload_path.$pname1)){
                    if(empty($urlposition)){
                        $urlposition = '/images/news/';
                    }
                    $arr = array('name'=>iconv("GBK",'UTF-8',$pname1),'subscribe'=>'','urlposition'=>$urlposition,'time'=>date('Y-m-d h:i:s',time()),'source'=>'cnew','belong'=>'news');
                    //插入数据库
                    Db::name('picture')->insert($arr);
                }else{
                    $this ->error('Failed!!','admin/content/newsqiye');
                }
                if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
                    if(empty($urlposition)){
                        $urlposition = '/images/news/';
                    }
                    $arr = array('name'=>iconv("GBK",'UTF-8',$pname),'subscribe'=>'','urlposition'=>$urlposition,'time'=>date('Y-m-d h:i:s',time()),'source'=>'cnew','belong'=>'news');
                    //插入数据库
                    Db::name('picture')->insert($arr);
                }else{
                    $this ->error('Failed!!','admin/content/newsqiye');
                }
                //取出刚插入的Id值
                $idd = Db::name('picture') -> field('Id') -> where('name',iconv('GBK','UTF-8',$pname1)) -> find();
                $id1 = Db::name('picture') -> field('Id') -> where('name',iconv('GBK','UTF-8',$pname)) -> find();


                //修改新闻
                $arr =array('title'=>$title,'png_id'=>$idd['Id'],'bg_id'=>$id1['Id'],'subtitle'=>$subtitle,'source'=>$source,'writer'=>$writer,'time'=>time(),'url'=>$url,'content'=>$content);
                Db::name('news') -> where('Id',$id) ->update($arr);
                $this -> success('修改成功','admin/content/newsqiye');
            }else{ //企业新闻添加
                /*图片的添加*/
                //上传文件的存放路径
                $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/news/';
                //开始移动文件到相应的文件夹
                $pname1 = iconv("UTF-8","GBK",$pname1);
                $pname = iconv("UTF-8","GBK",$pname); //背景图
                if(move_uploaded_file($pic1['tmp_name'],$upload_path.$pname1)){
                    if(empty($urlposition)){
                        $urlposition = '/images/news/';
                    }
                    $arr = array('name'=>iconv("GBK",'UTF-8',$pname1),'subscribe'=>'','urlposition'=>$urlposition,'time'=>date('Y-m-d h:i:s',time()),'source'=>'cnew','belong'=>'news');
                    //插入数据库
                    Db::name('picture')->insert($arr);
                }else{
                    $this ->error('Failed!!','admin/content/newsqiye');
                }
                if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
                    if(empty($urlposition)){
                        $urlposition = '/images/news/';
                    }
                    $arr = array('name'=>iconv("GBK",'UTF-8',$pname),'subscribe'=>'','urlposition'=>$urlposition,'time'=>date('Y-m-d h:i:s',time()),'source'=>'cnew','belong'=>'news');
                    //插入数据库
                    Db::name('picture')->insert($arr);
                }else{
                    $this ->error('Failed!!','admin/content/newsqiye');
                }
                //取出刚插入的Id值
                $id  = Db::name('picture') -> field('Id') -> where('name',iconv('GBK','UTF-8',$pname1)) -> find();
                $id1 = Db::name('picture') -> field('Id') -> where('name',iconv('GBK','UTF-8',$pname)) -> find();

               /*内容的添加*/
                $arr =array('title'=>$title,'png_id'=>$id['Id'],'bg_id'=>$id1['Id'],'subtitle'=>$subtitle,'source'=>$source,'writer'=>$writer,'time'=>time(),'type'=>1,'url'=>$url,'content'=>$content);
                Db::name('news')->insert($arr);
                $this->success('添加成功', 'admin/content/newsqiye');
            }
        }elseif($ac == 'newshangye') {
            if(!empty($bc)){//行业新闻修改
                /*转移图片*/
                /*图片的添加*/
                //上传文件的存放路径
                $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/news/';
                //开始移动文件到相应的文件夹
                $pname1 = iconv("UTF-8","GBK",$pname1);
                $pname = iconv("UTF-8","GBK",$pname); //背景图
                if(move_uploaded_file($pic1['tmp_name'],$upload_path.$pname1)){
                    if(empty($urlposition)){
                        $urlposition = '/images/news/';
                    }
                    $arr = array('name'=>iconv("GBK",'UTF-8',$pname1),'subscribe'=>'','urlposition'=>$urlposition,'time'=>date('Y-m-d h:i:s',time()),'source'=>'inew','belong'=>'news');
                    //插入数据库
                    Db::name('picture')->insert($arr);
                }else{
                    $this ->error('Failed!!','admin/content/newshangye');
                }
                if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
                    if(empty($urlposition)){
                        $urlposition = '/images/news/';
                    }
                    $arr = array('name'=>iconv("GBK",'UTF-8',$pname),'subscribe'=>'','urlposition'=>$urlposition,'time'=>date('Y-m-d h:i:s',time()),'source'=>'inew','belong'=>'news');
                    //插入数据库
                    Db::name('picture')->insert($arr);
                }else{
                    $this ->error('Failed!!','admin/content/newshangye');
                }
                //取出刚插入的Id值
                $idd = Db::name('picture') -> field('Id') -> where('name',iconv('GBK','UTF-8',$pname1)) -> find();
                $id1 = Db::name('picture') -> field('Id') -> where('name',iconv('GBK','UTF-8',$pname)) -> find();

                $arr =array('title'=>$title,'png_id'=>$idd['Id'],'bg_id'=>$id1['Id'],'subtitle'=>$subtitle,'source'=>$source,'writer'=>$writer,'time'=>time(),'url'=>$url,'content'=>$content);
                Db::name('news') -> where('Id',$id) -> update($arr);
                $this -> success('修改成功','admin/content/newshangye');
            }else{//行业新闻添加
                /*图片的添加*/
                //上传文件的存放路径
	       $upload_path = dirname(dirname(dirname(dirname(__FILE__)))).'/public/static/images/news/';
                //开始移动文件到相应的文件夹
                $pname1 = iconv("UTF-8","GBK",$pname1);
                $pname = iconv("UTF-8","GBK",$pname); //背景图
                if(move_uploaded_file($pic1['tmp_name'],$upload_path.$pname1)){
                    if(empty($urlposition)){
                        $urlposition = '/images/news/';
                    }
                    $arr = array('name'=>iconv("GBK",'UTF-8',$pname1),'subscribe'=>'','urlposition'=>$urlposition,'time'=>date('Y-m-d h:i:s',time()),'source'=>'inew','belong'=>'news');
                    //插入数据库
                    Db::name('picture')->insert($arr);
                }else{
                    echo '行业添加';
                    $this ->error('Failed!!','admin/content/newsqiye');
                }
                if(move_uploaded_file($pic['tmp_name'],$upload_path.$pname)){
                    if(empty($urlposition)){
                        $urlposition = '/images/news/';
                    }
                    $arr = array('name'=>iconv("GBK",'UTF-8',$pname),'subscribe'=>'','urlposition'=>$urlposition,'time'=>date('Y-m-d h:i:s',time()),'source'=>'inew','belong'=>'news');
                    //插入数据库
                    Db::name('picture')->insert($arr);
                }else{
                    $this ->error('Failed!!','admin/content/newsqiye');
                }
                //取出刚插入的Id值
                $id = Db::name('picture') -> field('Id') -> where('name',iconv('GBK','UTF-8',$pname1)) -> find();
                $id1 = Db::name('picture') -> field('Id') -> where('name',iconv('GBK','UTF-8',$pname)) -> find();

                //内容的添加
                $arr =array('title'=>$title,'png_id'=>$id['Id'],'bg_id'=>$id1['Id'],'subtitle'=>$subtitle,'source'=>$source,'writer'=>$writer,'time'=>time(),'type'=>2,'url'=>$url,'content'=>$content);
                Db::name('news')->insert($arr);
                $this->success('添加成功', 'admin/content/newshangye');
            }
        }
        else{
            $this->error("未知参数");
        }
    }

    //通用文字更改
    public function update(){
        $request = \request();
        if($request->post()){
            $data = input('post.');
            $name = array_keys($data);
            $data = array_values($data);
            $arr=array();
            foreach ($data as $k => $val){
                switch ($name[$k]){
                    case '文化标题':
                        $arr['titlename'] = $val;
                        break;
                    case '简介标题':
                        $arr['titlename'] = $val;
                        break;
                    case '副标题':
                        $arr['subname'] = $val;
                        break;
                    case '内容':
                        $arr['titlecontent'] = $val;
                        break;
                    case '承诺名':
                        $arr['subname'] = $val;
                        break;
                    case '底部文字标题':
                        $arr['titlename'] = $val;
                        break;
                    default:
                        break;
                }
            }
            $result = Db::name('title')->where('id',$data[0])->find();
            if($result){
               db('title')->where('Id',$data[0])->update($arr);
               return "修改成功";
            }
            else{
                return "修改失败";
            }
        }
        else{
            return "访问方式错误";
        }
    }
    //监督文字更新
    public function jdupdate(){
        $request = \request();
        if($request->post()){
            $data = input('post.');
            $data = array_values($data);
            $map['number'] = $data[1];
            $map['component'] = $data[2];
            $map['standard'] = $data[3];
            $map['phone'] = $data[4];
            $map['email'] = $data[5];
            $rs = db('service')->where('Id',$data[0])->find();
            if ($rs){
                db('service')->where('Id',$data[0])->update($map);
                return "修改成功";
            }else{
                return "修改失败";
            }

        }
        else{
            return "访问方式错误";
        }
    }
}