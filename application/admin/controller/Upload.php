<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/2
 * Time: 17:14
 */
namespace app\admin\controller;
use think\Config;
use think\Request;
set_time_limit(0);

class Upload extends Base{
    public function index() {
//        $res['info'] = '测试**** ';
//        $res['code'] = 500;
//        echo json_encode($res);
//        die();
       /* if(!IS_POST){
            $this->error('你没有权限访问');
        }*/

        header('Content-type: application/json');

        //测试数据 允许任何跨域上传
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');


        $config = array(
            'maxSize'  =>    0,
            'rootPath' =>    './upload/',
            'saveName' =>    'md5',//array('uniqid',''),
            'exts'     =>    array('jpg', 'gif', 'png', 'pdf','jpeg', 'apk','mp4','mp3','wmv','avi',/*'bmp',*/'jpeg', 'pdf','zip'),
            'autoSub'  =>    true,
            'subName'  =>    array('date','Ymd'),
            'replace'  => true,
        );
        $request = Request::instance();
        $fsize = input('post.size');		//本次上传的文件大小
        $findex = input('post.indexCount');	//上传数据分片的索引
        $ftotal = input('post.totalCount');	//上传数据分片的总数
        $ftype = input('post.type');		//上传的类型
        //$fdata =  request()->file('file');		//数据
        $fdata = $_FILES['file'];

        $file['ext'] = strtolower(substr(strrchr(input('post.name'), '.'), 1));

        if(!in_array($file['ext'],$config['exts'])){
            $res['info'] = '不允许的文件类型';
            $res['code'] = 500;
            $this->res($res);
        }

        if(empty( input('post.module') ) || input('post.module') == 'undefined'){		//保存的模块
            $module = 'default';
        }else{
            $module = input('post.module');
        }

        $fname = input('post.name');

        //$appName = str_replace('http://','',$_SERVER['HTTP_ORIGIN']);
        //$appName = str_replace(config('DOMAIN'),'',$appName);

        $path = "";

        $dir = $path."upload/".$module.'/'.date('Ymd');

        $save = $dir."/".$fname;


        if(!is_dir($dir))
        {
            $this->mk_dir($dir);
            if(!is_dir($dir)){
                $res['info'] = '无法创建目录,请联系维护人员';
                $res['code'] = 500;
                //$res['data']['index'] = $findex;
                //$res['data']['total'] = $ftotal;
                $this->res($res);
                exit;
            }

            chmod($dir,0777);
        }
        //读取临时文件内容
        $temp = fopen($fdata["tmp_name"],"r+");
        $filedata = fread($temp,filesize($fdata["tmp_name"]));

        //将分段内容存放到新建的临时文件里面
        $tempName = $dir."/".$fname.'.'.$findex.".tmp";

        if(file_exists($tempName)) unlink($tempName);
        $tempFile = fopen($tempName,"w+");
        fwrite($tempFile,$filedata);

        fclose($tempFile);
        fclose($temp);
        $res['_size'] = $_FILES['file'];

        if($findex+1==$ftotal)
        {
            //上传完成
            if(file_exists($save)) @unlink($save);
            //循环读取临时文件并将其合并置入新文件里面
            for($i=0;$i<$ftotal;$i++)
            {
                $readData = fopen($dir."/".$fname.'.'.$i.".tmp","r+");
                $writeData = fread($readData,filesize($dir."/".$fname.'.'.$i.".tmp"));
                $newFile = fopen($save,"a+");
                fwrite($newFile,$writeData);
                fclose($newFile);
                fclose($readData);
                $resu = @unlink($dir."/".$fname.'.'.$i.".tmp");
            }

            //dump($save);exit;

            $name = $save.'.'.$file['ext'];
            $nname = $dir.'/'.md5_file($save).'.'.$file['ext'];

            rename($save,$nname);

            $res['info'] = '上传成功';
            $res['code'] = 200;
            $res['data']['url'] = str_replace('upload/','',$nname);

            $res['data']['size'] = $fsize;
            $res['data']['type'] = $ftype;

            //如果上传文件是apk 那么获取包名和版本号
            if ($file['ext'] == 'apk') {
                $res['data']['apk'] = $this->getApkInfo($nname);
            }else if(in_array($file['ext'],['jpg','png','bmp','jpeg','gif'])){
                $img =getimagesize($nname);
                $res['data']['img']['width'] = $img['0'];
                $res['data']['img']['height'] = $img['1'];
            }

            $this->res($res);

            //$res = array("res"=>"success","url"=>$save);
            //echo json_encode($res);
        }else{
            //分片上传 在这里可拓展断点续传
            $res['info'] = '部分内容上传成功';
            $res['code'] = 206;
            $res['data']['index'] = $findex;
            $res['data']['total'] = $ftotal;
            $res['data']['size'] = $fsize;
            $this->res($res);
        }
    }

    private function getApkInfo($path){
        $ApkParser = new \Vendor\ApkParser();
        $res                 = $ApkParser->open( $config['rootPath'].$path );
        $file['package']     = $ApkParser->getPackage();
        $file['versionName'] = $ApkParser->getVersionName();
        return $file;
    }
    private function res($info='',$code = 200,$data=''){
        if(!is_string($info)){
            echo json_encode($info);exit;
        }
        $res['info'] = $info;
        $res['code'] = $code;
        $res['data'] = $data;

        echo json_encode($res);
        exit;
    }
    function mk_dir($dir, $mode = 0777){
        if (is_dir($dir) || @mkdir($dir,$mode,true)) return true;
        if (!mk_dir(dirname($dir),$mode)) return false;
        return @mkdir($dir,$mode,true);
    }
}
