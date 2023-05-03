<?php

class IndexController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->homepage();
	}


	private function homepage(){
		$result = Framework::call('getNumRegularArchived');

		$this->tpl->assign('index');
		$this->tpl->numVideos = $result->fetch_row()[0];
		$this->tpl->display();
	}
}