<?php

include_once 'config/init.php';

$url = explode("/", $_SERVER['REQUEST_URI']);
$deadVideos = new Template('templates/frontend/dead-videos-admin.tpl');

$deadVideosQuery = new DeadVideos();
$deadVideosLTKQuery = new DeadVideosLTK(); 
$deadVideos->url = $url;
$deadVideos->color = $deadVideos->colors;

if($url[1] == 'dead-videos-admin'){
	$deadVideos->description = "Administration";
	$deadVideos->deadVideoData = array_merge($deadVideosQuery->deadVideosGoldenEye(), $deadVideosQuery->deadVideosPerfectDark(), $deadVideosLTKQuery->deadVideosLTK());	
	$deadVideos->dead = sizeof($deadVideos->deadVideoData) + $deadVideos->dead = sizeof($deadVideos->deadVideoData) + $deadVideosLTKQuery->numDeadVideosLTK();
}

echo $deadVideos;