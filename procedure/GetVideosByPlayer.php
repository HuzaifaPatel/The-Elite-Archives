<?php

class GetVideosByPlayer extends Procedure{

	public function __construct(){
		parent::__construct();
		parent::setPlayer($_GET['player']);
		parent::setDBName();
		parent::set_game_selected();
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
}