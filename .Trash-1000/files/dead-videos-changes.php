<?php

include_once 'config/init.php';

$url = explode("/", $_SERVER['REQUEST_URI']);
$deadVideos = new Template('templates/frontend/dead-videos-changes.tpl');

$changesQuery = new DeadVideoChanges(); 
$deadVideos->url = $url;
$deadVideos->color = $deadVideos->colors;

if($url[1] == 'dead-videos-changes'){
	$deadVideos->deadVideoData = $changesQuery->deadVideoChanges();
	$deadVideos->description = "Change Log";
	$deadVideos->fixed = sizeof($deadVideos->deadVideoData);
}

echo $deadVideos;