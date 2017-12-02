<?php
//start.php入口文件
namespace think;
define('DS', DIRECTORY_SEPARATOR);
define('EXT', '.php');
define('LIB_PATH', __DIR__ .DS.'library'.DS);

// ThinkPHP 引导文件
// 加载基础文件
require 'base.php';
// 执行应用
App::run()->send();