<?php
namespace core\lib;
use core\lib\conf;

//class model extends \PDO
class model extends \medoo
{
	public function __construct()
	{
		//开始搭建用的pdo
//		 $database = conf::all('database');
//		 try{
//			 parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWD']);
//		 }catch(\PDOException $e){
//			 p($e->getMessage());
//		 }

		//composer 自动加载的数据库类         medoo.lvtao.net/doc.php
		$option = conf::all('database');
		parent::__construct($option);


	}
}


?>