<?php 

class Template{

	private $tpl;
	private $vars = array();
	// public $colors = array();


	public function __construct(){
		include_once 'main.php';

		// foreach($this->playerColors() as $color){
		// 	$player = $color['player'];
		// 	$this->colors[$player] = $color['hexcode'];
		// }

		// print_r($this->colors);
	}

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
		echo $this;
	}
}