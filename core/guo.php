<?php
namespace core;

class Guo{

     public static $classMap = array( );
	 
	 public $assign;

	static public function run()
	{
		\core\lib\log::init();
		
	    $rout = new \core\lib\rout();      //路由类
	    //p($rout->contr);
		//p($rout->action);
		$controller = $rout->contr;
		$action     = $rout->action;
		$controllerfile = APP.'/Controller/'.$controller.'Controller.php';
		$class = MODULE.'\\Controller\\'.$controller.'Controller';
		//p($class);exit;
		if(is_file($controllerfile))
		{
		    include $controllerfile;
            $dx = new $class();
            $dx->$action();		
            \core\lib\log::log('controller'.$class.'  '.'action'.$action);			
		}else{
			throw new \Exception('找不到控制器'.$controller);
		}
	}

	static public function load($class)
	{
		//自动加载类库
        if(isset($classMap[$class])){
        	return true;

        }else{
             
            $class = str_replace('\\','/', $class);

		    $file = GUOKJ.'/'.$class.'.php';
            if(is_file($file))
			{
				include $file;
				self::$classMap[$class] = $class;
			}else{
				return false;
			}

        }
        
	}
	
	public function assign($name,$value)
	{
		$this->assign[$name] = $value;
		
	}
	public function display($file)
	{
		$file = APP.'/views/'.$file;
		if(is_file($file))
		{
			//extract($this->assign);              //php的函数  需要查询
			//include $file;
			\Twig_Autoloader::register();

			$loader = new \Twig_Loader_Filesystem(APP.'/views');
			//$loader = new \Twig_Loader_Filesystem($file);
			$twig = new \Twig_Environment($loader, array(
				'cache' => GUOKJ.'/log/twig',
				'debug' => DEBUG
			));
			$template = $twig->loadTemplate('index.html');
			$template->display($this->assign?$this->assign:'');
		}
	}
	
	
}

?>