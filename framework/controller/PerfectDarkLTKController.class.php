<?php

class PerfectDarkLTKController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->PerfectDarkLTK();
	}

	public function PerfectDarkLTK(){
		$this->tpl->assign('ltk-dltk');
		$this->tpl->display();
	}
}