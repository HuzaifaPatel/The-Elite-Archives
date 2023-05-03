<?php

class DeadVideosController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->deadVideos();
	}

	public function deadVideos(){
		$this->tpl->assign('dead-videos');
		$this->tpl->display();
	}


}