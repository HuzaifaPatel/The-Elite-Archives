<?php

class SingleSegmentsController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->singleSegment();
	}

	private function singleSegment(){
			$this->tpl->assign('single-segments');
			$this->tpl->display();
	}
}

?>