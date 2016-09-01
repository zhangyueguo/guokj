<?php
  /**
     入口文件
     1.定义常量
     2.加载函数库
     3.启动框架
   */
  define('GUOKJ',realpath('./'));
  //define('GUOKJ',__DIR__);   一样
  define('CORE',GUOKJ.'/core');
  define('APP',GUOKJ.'/app');

  define('DEBUG',true);

  if(DEBUG)
  {
  	ini_set('display_error', On);
  }else{
  	ini_set('display_error',off);
  }

  include CORE.'/common/function.php';

  include APP.'/guo.php';

  guokj\app\Guo::run();
  

?>