<?php

class Procedure{
	private $db = null;
	protected $player = null;
	protected $db_table_name = null;

	public function __construct(){
		$this->db = Framework::getDB();
	}

	public function getDB(){
		return $this->db;
	}

	protected function setPlayer($player){
		$this->player = $player;
		$this->player = str_replace(' ', '_', $player);
		$this->player = $this->getDB()->real_escape_string($this->player);
	}

	protected function setDBName(){
		if(explode("/", $_SERVER[REQUEST_URI])[2] == "ltk-dltk"){
			$this->db_table_name = 'the-elite-ltk-videos';
		}else{
			$this->db_table_name = 'the-elite-videos';
		}
	}
}