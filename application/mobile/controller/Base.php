<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/7
 * Time: 17:07
 */
namespace app\mobile\controller;
use think\Controller;
use think\Db;

class Base extends Controller{
    public  function  _initialize(){
        $request = request();
        $cName = $request->controller();
        if (!$this->ismobile()){
            $this->redirect('home/'.$cName.'/index');
        }
        $footerdata = db('title')->where("type = 'dibu'")->field('titlename,titlecontent')->select();
        foreach ($footerdata as $k => $data){
            $arr[$data['titlename']] = $data;
        }
        $head = db('website')->where('sitename',$cName)->field('SEOtitle,SEOkeyword,SEOsubscribe')->find();
        $this->assign('head',$head);
        $this->assign('footerdata',$arr);
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
        $mobile_token_list=array('Profile/MIDP','Configuration/CLDC-','160��160','176��220','240��240','240��320','320��240','UP.Browser','UP.Link','SymbianOS','PalmOS','PocketPC','SonyEricsson','Nokia','BlackBerry','Vodafone','BenQ','Novarra-Vision','Iris','NetFront','HTC_','Xda_','SAMSUNG-SGH','Wapaka','DoCoMo','iPhone','iPod');

        $found_mobile=CheckSubstrs($mobile_os_list,$useragent_commentsblock) ||
            CheckSubstrs($mobile_token_list,$useragent);

        if ($found_mobile){
            return true;
        }else{
            return false;
        }
    }
}