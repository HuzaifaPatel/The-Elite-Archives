<?php

class GoldenEyeLTKController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->GoldenEyeLTK();
	}

	private function GoldenEyeLTK(){
		$this->tpl->assign('ltk-dltk');
		$this->tpl->display();
	}
}