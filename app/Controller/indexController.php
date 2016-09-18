<?php 
namespace app\Controller;

use app\model\userModel;
use core\lib\model;

class IndexController extends \core\guo{
	
	public function index()
	{
		$tmp = \core\lib\conf::get('CONTR','route');
		
		//$model = new  \core\lib\model();
		
		//var_dump($model);
		
		/* p('it is index');
		$model = new \core\lib\model();
		$sql = "select * from ceshi";
		$res = $model->query($sql);
		p($res->fetchAll()); */
		
		//创建视图
//		$data = "hellor word";
//		$title = "shitu wenjian";
//		$this->assign('title',$title);
//		$this->assign('data',$data);
//		$this->display('index/index.html');
		$model = new usermodel();
		$res = $model->lists();
		dump($res);
	}
	public function ceshi()
	{
		$model = new userModel();
		$data = array(
		    'name'=>'zhangsan',
			'content'=>"shijie nihao,wo ai ni shijie"
		);
		$data = $model->setOne(2,$data);
		dump($data);
	}
	public function insertuser()
	{
		$model = new model();
		$data = array(
            'name'=>'zhangsan',
			'content'=> "世界你好，我爱你世界"
		);
		$res = $model->insert('user',$data);
		dump($res);
	}
}


?>