<?php

namespace App\Frontend\Controller;

use App\Frontend\Controller;

class Home extends Controller {

    public function indexAction() {
    	
    	echo 'HELLO WORLD !<br />';
    	echo '<pre>';
    	var_dump($this->getModuleConfig());
    	

    	//$this->load('Model', new \FkFramework\ORM\TableManager());
    	//var_dump(\FkFramework\Db\QueryBuilder::create()->from('user')->select('id')->fetch());
    	var_dump($this->Model->get('user')->findAll()->count());
    	foreach ($this->Model->get('user')->findAll() as $key => $value) {
    		var_dump($value);
    	};

    	/*
	$cats = $this->Model->Category->getAll(array('limit' => 6));
	$news = $this->Model->News->getAll(array('limit' => 5, 'orderBy' => array('date', 'desc')));
	$articles = $this->Model->Tutorial->getAll(array('orderBy' => array('date', 'desc'), 'limit' => 5));

	$this->render(compact('cats', 'news', 'articles'));
	*/
	/*
		$table = $this->Model->User->getAll();
		$table[0]->getTable();
		echo "<pre>";
		print_r($table);
		echo "</pre>";
		*/
		//Logger::log(LogLevel::WARNING,"User {username} created", array('username' => 'Bernard'));
		//echo $this->Filter->sanitize("Get !!!!!!!! the ône !!!!!!! get it !!!!");
		// echo "<pre>";
		// print_r(new \Fozeek\Component\Test($this));
		// print_r($this->Model->User->getAll());
		// echo "</pre>";
		// die;
		// $this->API->generateKey("HaveABreak");
		// $explode = explode('\\', get_class($this->API));
		// var_dump(end($explode));
		//echo $this->API->getKey();
		//echo "<br />";
		//var_dump($this->Request->getData("lol", "get"));
echo '</pre>';
		//$this->render();
    }

}

?>