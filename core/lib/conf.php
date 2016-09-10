<?php
namespace core\lib;

class conf{
	
	static public $conf = array();
	static public function get($name,$file)
	{
		/**
		*1.�ж������ļ��Ƿ����
		*2.�ж������Ƿ����
		*3.��������
		*/
		if(isset(self::$conf[$file]))
		{
			return self::$conf[$file][$name];	
		}else{
		   $path = GUOKJ.'/core/config/'.$file.'.php';
		   // echo $path;
			if(is_file($path))
			{
				$conf = include $path;
				if(isset($conf[$name]))
				{
					self::$conf[$file] = $conf;
					return $conf[$name];
				}else{
					throw new \Exception('û�����������'.$name);
				}
			}else{
				throw new \Exception('�Ҳ��������ļ�'.$file);
			}
		}
	}
	
	static public function all($file)
	{
		if(isset(self::$conf[$file]))
		{
			return self::$conf[$file][$name];	
		}else{
		   $path = GUOKJ.'/core/config/'.$file.'.php';
		   // echo $path;
			if(is_file($path))
			{
				$conf = include $path;
				self::$conf[$file] = $conf;
				return $conf;
			}else{
				throw new \Exception('�Ҳ��������ļ�'.$file);
			}
		}
	}
	
	
}



?>