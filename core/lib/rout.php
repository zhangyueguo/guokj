<?php
namespace core\lib;
use core\lib\conf;

/**
* 
*/
class rout 
{
	public $contr;
	public $action;
	
	function __construct()
	{
		//.com/index/index
		/**
		   1.隐藏index.php 
		   2.获取URL 参数的部分
		   3.返回对应的控制器和方法
		*/
		//p($_SERVER['REQUEST_URI']);
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/')
		{
			$path = $_SERVER['REQUEST_URI'];
			$patharr = explode('/',trim($path,'/'));
			//解析url
			if(isset($patharr[0]))
			{
				$this->contr = $patharr[0];
				unset($patharr[0]);
			}
			if(isset($patharr[1]))
			{
				$this->action = $patharr[1];
				unset($patharr[1]);
			}else{
				$this->action = conf::get('ACTION',route);
			}
			//2.多余部分转化为 get
			$count = count($patharr) + 2;
			$i = 2;
			while($i < $count)
			{
				if(isset($patharr[$i + 1]))
				{
					$_GET[$patharr[$i]] = $patharr[$i + 1];
				}
				$i = $i + 2;
			}
			//p($_GET);
			
		}else{
			$contr = conf::get('CONTR',route);
			$action = conf::get('ACTION',route);
		}
	}
}

?>