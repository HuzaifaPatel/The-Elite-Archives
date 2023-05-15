<?php

class GetVideosByPlayer extends Procedure{
	private $game_selected = null;
	
	public function __construct(){
		parent::__construct();
		parent::setPlayer($_GET['player']);
		parent::setDBName();
		$this->set_game_selected();
	}

	public function execute(){
		$query = "
			SELECT
				*
			FROM
				`the-elite`.`$this->db_table_name`
			WHERE 
				player = '$this->player'
			AND
				game = '$this->game_selected'
			ORDER BY
				published_date ASC
		";

		return $this->getDB()->query($query);
	}
	
	private function set_game_selected(){
		if(explode("/", $_SERVER[REQUEST_URI])[1] == 'goldeneye'):
			$this->game_selected = str_replace('goldeneye', 'ge', explode("/", $_SERVER[REQUEST_URI])[1]);
		else:
			$this->game_selected = str_replace('perfect-dark', 'pd', explode("/", $_SERVER[REQUEST_URI])[1]);
		endif;
	}
}