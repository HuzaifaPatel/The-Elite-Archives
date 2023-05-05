<?php

class Procedure{
	private $db = null;

	public function __construct(){
		$this->db = Framework::getDB();
	}

	public function getDB(){
		return $this->db;
	}
}