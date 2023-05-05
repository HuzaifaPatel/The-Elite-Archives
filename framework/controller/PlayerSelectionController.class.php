<?php

class PlayerSelectionController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->tpl->assign('player-selection');
		$this->populate_players();
	}

	private function populate_players(){
		if(explode('/', $_SERVER['REQUEST_URI'])[1] == 'goldeneye') :
			$result = Framework::call('GetGoldenEyePlayerNames');
		else :
			$result = Framework::call('GetPerfectDarkPlayerNames');
		endif;

		while($player = $result->fetch_assoc()){
			$players[] = str_replace("_"," ",$player);
		}

		$this->tpl->players = $players;
		$this->tpl->display();
	}
}