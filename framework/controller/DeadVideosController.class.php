<?php

class DeadVideosController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->deadVideos();
	}

	public function deadVideos(){
		$this->result = Framework::call('GetDeadVideos')->fetch_all(MYSQLI_ASSOC);
		parent::enhanceArray();
		$this->tpl->videoData = $this->result;
		$this->tpl->assign('dead-videos');
		$this->tpl->game = explode("/", $_SERVER['REQUEST_URI'])[1];
		$this->tpl->display();
	}
}