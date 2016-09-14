<?php 
namespace app\Controller;

class IndexController extends \core\guo{
	
	public function Index()
	{
		$tmp = \core\lib\conf::get('CONTR','route');
		
		$model = new  \core\lib\model();
		
		//var_dump($model);
		
		/* p('it is index');
		$model = new \core\lib\model();
		$sql = "select * from ceshi";
		$res = $model->query($sql);
		p($res->fetchAll()); */
		
		//创建视图
		$data = "hellor word";
		$title = "shitu wenjian";
		$this->assign('title',$title);
		$this->assign('data',$data);
		$this->display('index/index.html');
		
		
	}
}


?>