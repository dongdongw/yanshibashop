<?php 

/**
* file: init.php
* 作用：初始化文件
*/

//初始化当前的绝对路径
//因为Windows和Linux都支持'/'，但是Linux不支持'\'。注意\需要转义
define('ROOT',str_replace('\\','/',dirname(dirname(__FILE__))).'/');


//过滤参数，用递归的方式过滤$_GET,$_POST,$_COOKIE


//设置报错级别
define('DEBUG',true);

if(defined('DEBUG')) {
	error_reporting(E_ALL);
}else{
	error_reporting(0);
}

require(ROOT.'include/db.class.php');
require(ROOT.'include/conf.class.php');
