<?php 

class Template{

	private $tpl;
	private $vars = array();


	public function __get($key){
		return $this->vars[$key];
	}

	public function __set($key, $value){
		$this->vars[$key] = $value;
	}

	public function __toString(){
		extract($this->vars);
		chdir(dirname($this->tpl));
		ob_start();
		require basename($this->tpl);
		return ob_get_clean();
	}

	public function assign($tpl){
		$this->tpl = 'templates/'. $tpl . '.tpl';
	}

	public function display(){
		include_once 'templates/main.tpl';
		echo $this;
	}
}