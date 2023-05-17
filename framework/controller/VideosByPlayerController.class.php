<?php

class VideosByPlayerController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->PlayerILs();
	}

	private function PlayerILs(){
		$this->result = Framework::call('GetVideosByPlayer')->fetch_all(MYSQLI_ASSOC);
		$this->tpl->color = Framework::call('GetPlayerColor')->fetch_assoc()['hexcode'];
		$this->tpl->player = $_GET['player'];
		parent::enhanceArray();
		$this->tpl->videoData = $this->result;
		$this->tpl->assign('videos-by-player');
		$this->tpl->display();
	}
}