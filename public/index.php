<?php

define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
if (strpos($_SERVER['SERVER_ADDR'], '127.0.0.1') !== FALSE) {
    require __DIR__ .'/../thinkphp/start.php';
} else {
    require '../thinkphp/start.php';
}
