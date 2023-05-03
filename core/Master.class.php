<?php

class Master extends Database{

	protected function getPlayerColors(){
		
		$query = "
			SELECT 
				*
			FROM 
				`player_colors`
			GROUP BY
				player
		";

		return $this->connectPlayerColors()->query($query);
	}

	public function playerColors(){
		$result = $this->getPlayerColors();

		while($color = $result->fetch_assoc()){
			$colors[] = $color;
		}
		return $colors;
	}
}