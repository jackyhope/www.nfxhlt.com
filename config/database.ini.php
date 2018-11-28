<?php
if (!defined('IN_FINECMS')) exit();

/**
 * 数据库配置信息
 */
 
 
 
 if (strpos($_SERVER['SERVER_ADDR'], '192.168.116.27') !== FALSE) {//测试环境1
return array(

	'host'     => 'localhost', 
	'username' => 'root', 
	'password' => '123456', 
	'dbname'   => 'nfxh', 
	'prefix'   => 'fn_', 
	'charset'  => 'utf8', 
	'port'     => '3306', 

);
} else if (strpos($_SERVER['SERVER_ADDR'], '192.168.116.31') !== FALSE) {//测试环境2
return array(

	'host'     => '192.168.116.27', 
	'username' => 'root', 
	'password' => '123456', 
	'dbname'   => 'nfxh', 
	'prefix'   => 'fn_', 
	'charset'  => 'utf8', 
	'port'     => '3306', 

);
} else if (strpos($_SERVER['SERVER_ADDR'], '192.168') !== FALSE) { //本地环境
return array(

	'host'     => '192.168.116.27', 
	'username' => 'root', 
	'password' => '123456', 
	'dbname'   => 'nfxh', 
	'prefix'   => 'fn_', 
	'charset'  => 'utf8', 
	'port'     => '3306', 

);
} else {//线上环境
return array(

	'host'     => '10.30.88.15', 
	'username' => 'SAP', 
	'password' => 'bffebfb01900fe3af8a8633d3b0b7be2', 
	'dbname'   => 'nfxh', 
	'prefix'   => 'fn_', 
	'charset'  => 'utf8', 
	'port'     => '3306', 

);

}
 
 
