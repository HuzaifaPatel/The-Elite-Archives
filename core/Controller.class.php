<?php

class Controller{

	protected $tpl = null;
	protected $result = null;

	function __construct(){
		$this->tpl = new Template();	
	}	
}