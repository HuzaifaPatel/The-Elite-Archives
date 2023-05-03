<?php

class GetVideoDataByPlayer extends Database{

	protected function playerExists(){
		$player = str_replace(" ","_", $_GET['player']);
		
		$query = "
			SELECT 
				player 
			FROM 
				`video_data`
			WHERE 
				player = '$player'
			LIMIT 1
		";

		return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
	}

	protected function getVideoData(){
		$player = str_replace(" ","_", $_GET['player']);

		$game_selected = explode('/', $_SERVER['REQUEST_URI']);
		$game_selected = ($game_selected[1] == 'goldeneye' ? 'ge' : 'pd');
		
		$query = "
			SELECT 
				* 
			FROM 
				video_data 
			WHERE 
				player = '$player'
			AND
				game = '$game_selected'
			ORDER BY
				published_date ASC
		";

		return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
	}
}