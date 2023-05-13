<?php

class Procedure{
	private $db = null;
	public $player = null;

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
}