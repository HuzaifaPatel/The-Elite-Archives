<?php

	if(!isset($_SERVER['HTTP_REFERER'])){ ?>
		<script> window.location.replace("/"); </script> <?php
	}else{
		include_once 'config/init.php';
		$select = new Template('templates/frontend/player-selection.tpl');
		$player = new PlayerNames();
		
		(explode("/", $_SERVER['REQUEST_URI'])[1] == "goldeneye") ? $select->players = $player->showAllGEPlayers() : $select->players = $player->showAllPDPlayers();

		echo $select;
	}	