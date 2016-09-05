<?php 
namespace app\Controller;

class IndexController{
	
	public function Index()
	{
		p('it is index');
		$model = new \core\lib\model();
		$sql = "select * from ceshi";
		$res = $model->query($sql);
		p($res->fetchAll());
	}
	
	
	
}


?>