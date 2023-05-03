<?php

class GoldenEyeController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->goldeneye();
	}

	private function goldeneye(){
		$this->tpl->assign('goldeneye');
		$this->tpl->display();
	}
}