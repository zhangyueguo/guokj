<?php
namespace core;

class Guo{

     public static $classMap = array( );

	static public function run()
	{
	    //echo "ok";
	    $rout = new \core\lib\rout();
	    //p($rout->contr);
		//p($rout->action);
		$controller = $rout->contr;
		$action     = $rout->action;
		$controllerfile = APP.'/Controller/'.$controller.'Controller.php';
		$class = MODULE.'/'.$controller.'Controller';
		if(is_file($controllerfile))
		{
		    include $controllerfile;
            new MODULE.'/Controller/'.$controller();			
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
}

?>