<?php
namespace core\lib\drive\log;
use core\lib\conf;

class file{
	public $path;
	public function __construct()
	{
		$conf = conf::get("OPTION","log");
		$this->path =$conf['PATH'];
	}
	
	public function log($message,$file = 'log')
	{
		/**
		*1.确定文件的存储位置是否存在
		*新建目录
		*2.写入日志
		*/
		if(!is_dir($this->path)){
			mkdir($this->path,'0777',true);
		}
		
		//$message .= date('Y-m-d H:i:s');
	    return file_put_contents($this->path.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
		
	}
	
}


?>