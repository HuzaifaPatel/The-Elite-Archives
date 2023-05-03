<?php

class GetPlayerColors extends Database{

	protected function getPlayerColors(){
		
		$query = "
			SELECT 
				*
			FROM 
				`player_colors`
		";

		return $this->connectPlayerColors()->query($query);
	}
}