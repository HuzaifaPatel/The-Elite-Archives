<?php

include_once 'config/init.php';

if(!isset($_GET['player'])){
	$invalid = new Template('templates/404.tpl');
	echo $invalid;
	exit;
}

if($_GET['player'] == 'Kev B.'){ ?>
	<script> window.location.replace("/"); </script> <?php
}

$players = new Template('templates/frontend/players.tpl');

$videoStatus = new StatusOfVideos();

$players->player = $_GET['player'];

$players->alive = $videoStatus->getNumAvailableVideos();
$players->dead = $videoStatus->getNumUnavailableVideos();

$videoData = new VideoDataByPlayer();
$players->videoData = $videoData->getVideoData();

$colors = new PlayerColors();
$colors = $colors->playerColors();

foreach($colors as $data){
	if(str_replace(' ', '_', $_GET['player']) == $data['player']){
		$players->color = $data['hexcode'];
	}
}

// $stageData = new FilterProperties();
// $players->stages = $stageData->getStages();

$player_profile = explode('/', $players->videoData[0]['rankings_url']);
$players->player_profile = "https://rankings.the-elite.net/".$player_profile[3];

$players->url = explode("/", $_SERVER['REQUEST_URI']);

echo $players;