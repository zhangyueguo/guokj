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
		$file = GUOKJ.'\core\config\\'.$file.'.php';
		
		if(is_file($file))
		{
			$temp = $conf = include $file;
			var_dump($temp);
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



?>