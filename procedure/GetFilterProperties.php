<?php

class GetFilterProperties extends Database{

	protected function getStages(){
		$player = str_replace(" ","_", $_GET['player']);
		$query = "
			SELECT DISTINCT 
				stage 
			FROM 
				video_data 
			WHERE 
				player = '$player'
			ORDER BY
				stage = 'dam' DESC,
				stage = 'facility' DESC,
				stage = 'runway' DESC,
				stage = 'surface1' DESC,
				stage = 'bunker1' DESC,
				stage = 'silo' DESC,
				stage = 'frigate' DESC,
				stage = 'surface2' DESC,
				stage = 'bunker2' DESC,
				stage = 'statue' DESC,
				stage = 'archives' DESC,
				stage = 'streets' DESC,
				stage = 'depot' DESC,
				stage = 'train' DESC,
				stage = 'jungle' DESC,
				stage = 'control' DESC,
				stage = 'caverns' DESC,
				stage = 'cradle' DESC,
				stage = 'aztec' DESC,
				stage = 'egypt' DESC
		";

		return $this->connect()->query($query);
	}
}