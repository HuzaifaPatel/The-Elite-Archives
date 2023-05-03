<?php
class GetStatusOfVideos extends Database{

	protected function getAvailableVideos(){
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
			AND 
				file_exists = 1
		";

		return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
	}

	protected function getUnavailableVideos(){
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
			AND 
				file_exists = 0
		";

		return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
	}
}