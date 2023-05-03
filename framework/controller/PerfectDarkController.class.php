<?php

class PerfectDarkController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->perfectdark();
	}

	private function perfectdark(){
		$this->tpl->assign('perfect-dark');
		$this->tpl->display();
	}
}