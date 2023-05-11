<?php

class VideosByPlayerController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->PlayerILs();
	}

	public function PlayerILs(){
		$result = Framework::call('GetVideosByPlayer')->fetch_all(MYSQLI_ASSOC);
		$this->tpl->videoData = $result;
		$this->tpl->assign('videos-by-player');
		$this->tpl->display();
	}
}