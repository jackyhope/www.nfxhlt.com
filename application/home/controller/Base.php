<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Url;

class Base extends Controller
{
    public  function  _initialize(){
          $request = request();

        $cName = $request->controller();
        $title = '';
        $keyword='';
        $describtion='';

        $footer =array();
        switch ($cName){
            case 'Index':
                $data = Db::name('website') -> where('sitename','Index') -> find();
                $title = $data['SEOtitle'];
                $keyword = $data['SEOkeyword'];
                $describtion = $data['SEOsubscribe'];
                $list = Db::name('picture')->where('belong','footer') ->where('source','tel')->select();
                $footer = array();
                foreach ($list as $k =>$v ){
                    $v['urlposition'] = '/static'.$v['urlposition'].$v['name'];
                    $footer[$v['source']] = $v['urlposition'];
                }
                break;
            case 'About':
                $data = Db::name('website') -> where('sitename','About') -> find();
                $title = $data['SEOtitle'];
                $keyword = $data['SEOkeyword'];
                $describtion = $data['SEOsubscribe'];
                $list = Db::name('picture')->where('belong','footer') ->where('source','tel1')->select();
                $footer = array();
                foreach ($list as $k =>$v ){
                    $v['urlposition'] = '/static'.$v['urlposition'].$v['name'];
                    $footer[$v['source']] = $v['urlposition'];
                }
                break;
            case 'News':
                $data = Db::name('website') -> where('sitename','News') -> find();
                $title = $data['SEOtitle'];
                $keyword = $data['SEOkeyword'];
                $describtion = $data['SEOsubscribe'];
                $list = Db::name('picture')->where('belong','footer') ->where('source','tel1')->select();
                $footer = array();
                foreach ($list as $k =>$v ){
                    $v['urlposition'] = '/static'.$v['urlposition'].$v['name'];
                    $footer[$v['source']] = $v['urlposition'];
                }
                break;
            case 'Server':
                $data = Db::name('website') -> where('sitename','Content') -> find();
                $title = $data['SEOtitle'];
                $keyword = $data['SEOkeyword'];
                $describtion = $data['SEOsubscribe'];
                $list = Db::name('picture')->where('belong','footer') ->where('source','tel1')->select();
                $footer = array();
                foreach ($list as $k =>$v ){
                    $v['urlposition'] = '/static'.$v['urlposition'].$v['name'];
                    $footer[$v['source']] = $v['urlposition'];
                }
                break;
            case 'Detail':
                $data = Db::name('website') -> where('sitename','Detail') -> find();
                $title = $data['SEOtitle'];
                $keyword = $data['SEOkeyword'];
                $describtion = $data['SEOsubscribe'];
                $list = Db::name('picture')->where('belong','footer') ->where('source','tel')->select();
                $footer = array();
                foreach ($list as $k =>$v ){
                    $v['urlposition'] = '/static'.$v['urlposition'].$v['name'];
                    $footer[$v['source']] = $v['urlposition'];
                }
                break;
            case 'Fast':
                 $data = Db::name('website') -> where('sitename','Fast') -> find();
                $title = $data['SEOtitle'];
                $keyword = $data['SEOkeyword'];
                $describtion = $data['SEOsubscribe'];
                $list = Db::name('picture')->where('belong','footer') ->where('source','tel')->select();
                $footer = array();
                foreach ($list as $k =>$v ){
                    $v['urlposition'] = '/static'.$v['urlposition'].$v['name'];
                    $footer[$v['source']] = $v['urlposition'];
                }
                break;

        }
        //取出二维码
        $wechat = Db::name('picture') -> where('belong','detail') -> where('source','wechat') ->find();
        $qq = Db::name('picture') -> where('belong','detail') -> where('source','qq') ->find();
        //取出超链接
        $url = Db::name('friendlyurl') -> select();
        $content = Db::name('title') -> field('titlecontent') -> where('Id',24) -> find();
        $footer['jobemail'] = $content['titlecontent'];
        $content = Db::name('title') -> field('titlecontent') -> where('Id',25) -> find();
        $footer['joinus'] = $content['titlecontent'];
        $content =  Db::name('title') -> field('titlecontent') -> where('Id',26) -> find();
        $footer['address'] = $content['titlecontent'];


        $this -> assign('wechat',$wechat);
        $this -> assign('qq',$qq);
        $this -> assign('url',$url);
        $this -> assign('keyword',$keyword);
        $this -> assign('describtion',$describtion);
        $this -> assign('footer',$footer);
        $this -> assign('title',$title);
        $this -> assign('cName',$cName);
	$data = ['name'=>'yl.png','subscribe'=>'Aimee/快消品','urlposition'=>'/images/index/','time'=>time(),'source'=>'person','belong'=>'index'];
	//db('picture')->insert($data);
        if ($this->ismobile()){
            $this->redirect('mobile/'.$cName.'/index');
        }
    }

    public function ismobile(){
        $useragent=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $useragent_commentsblock=preg_match('|\(.*?\)|',$useragent,$matches)>0?$matches[0]:'';
        function CheckSubstrs($substrs,$text){
            foreach($substrs as $substr)
                if(false!==strpos($text,$substr)){
                    return true;
                }
            return false;
        }
        $mobile_os_list=array('Google Wireless Transcoder','Windows CE','WindowsCE','Symbian','Android','armv6l','armv5','Mobile','CentOS','mowser','AvantGo','Opera Mobi','J2ME/MIDP','Smartphone','Go.Web','Palm','iPAQ');
        $mobile_token_list=array('Profile/MIDP','Configuration/CLDC-','160  160','176  220','240  240','240  320','320  240','UP.Browser','UP.Link','SymbianOS','PalmOS','PocketPC','SonyEricsson','Nokia','BlackBerry','Vodafone','BenQ','Novarra-Vision','Iris','NetFront','HTC_','Xda_','SAMSUNG-SGH','Wapaka','DoCoMo','iPhone','iPod');

        $found_mobile=CheckSubstrs($mobile_os_list,$useragent_commentsblock) ||
            CheckSubstrs($mobile_token_list,$useragent);

        if ($found_mobile){
            return true;
        }else{
            return false;
        }
    }
}
