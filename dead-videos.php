<?php

include_once 'config/init.php';

$url = explode("/", $_SERVER['REQUEST_URI']);
$deadVideos = new Template('templates/frontend/dead-videos.tpl');

$deadVideosQuery = new DeadVideos(); 
$deadVideos->url = $url;
$deadVideos->color = $deadVideos->colors;

if($url[1] == 'dead-videos-goldeneye'){
	$deadVideos->deadVideoData = $deadVideosQuery->deadVideosGoldenEye();	
	$deadVideos->dead = sizeof($deadVideos->deadVideoData);	
	$deadVideos->description = "Dead GoldenEye Videos";
}else if($url[1] == 'dead-videos-perfect-dark'){
	$deadVideos->deadVideoData = $deadVideosQuery->deadVideosPerfectDark();
	$deadVideos->dead = sizeof($deadVideos->deadVideoData);
	$deadVideos->description = "Dead Perfect Dark Videos";
}

echo $deadVideos;