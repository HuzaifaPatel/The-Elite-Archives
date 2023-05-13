<?php

class GetPlayerColor extends Procedure{
	public function __construct(){
		parent::__construct();
		parent::setPlayer($_GET['player']);
	}

	public function execute(){
		$query = "
			SELECT
				hexcode
			FROM 
				`the-elite`.`player_colors`
			WHERE
				player = '$this->player'
		";

		return $this->getDB()->query($query);
	}
}