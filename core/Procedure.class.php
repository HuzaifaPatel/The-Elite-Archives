<?php

class Procedure{
	public $db = null;

	public function __construct(){
		$this->db = Framework::getDB();

		if($this->db == null){
			echo "hello";
		}
	}
}