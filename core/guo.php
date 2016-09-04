<?php
namespace core;

class Guo{

     public static $classMap = array( );

	static public function run()
	{
	    //echo "ok";
		p('ok');
	    $rout = new \core\lib\rout();
	    //p($rout->contr);
		//p($rout->action);
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