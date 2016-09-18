<?php

include "./vendor/autoload.php";
use \Whoops\Run;
use \Whoops\Handler\PrettyPageHandler;
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
  define('MODULE','app');
  define('DEBUG',true);


  if(DEBUG)
  {
      //1.第一版
//      $whoops = new Run;
//      $whoops->pushHandler(new PrettyPageHandler);
//      $whoops->register();
      //2.第二版
      $whoops = new Run;
      $errorTitle = '框架出错了';
      $option = new PrettyPageHandler();
      $option->setPageTitle($errorTitle);
      $whoops->pushHandler($option);
      $whoops->register();

  	  ini_set('display_error','On');
  }else{
  	ini_set('display_error','Off');
  }
 // dump($_SERVER);
  //sssssa();
 
  include CORE.'/common/function.php';

  include CORE.'/guo.php';
 
  spl_autoload_register('\core\Guo::load');

  \core\Guo::run();
  

?>
