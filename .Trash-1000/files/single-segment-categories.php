<?php

include_once 'config/init.php';

$category = new Template('templates/frontend/single-segment-categories.tpl');

$url = explode("/", $_SERVER['REQUEST_URI']);
$category->game = explode("/", $_SERVER['REQUEST_URI'])[1];
$categoryData = new SingleSegmentData();

$category->color = $category->colors;

if($url[4] == 'agent' && $url[3] == 'real-time'){
	$category->description = "Single Segment Agent Speedruns (Real Time)";
	$category->rtaData = $categoryData->realTimeAgent();
}else if($url[4] == 'agent' && $url[3] == 'game-time'){
	$category->description = "Single Segment Agent Speedruns (Game Time)";
	$category->rtaData = $categoryData->gameTimeAgent();
}else if($url[4] == 'secret-agent' && $url[3] == 'real-time'){
	$category->description = "Single Segment Secret Agent Speedruns (Real Time)";
	$category->rtaData = $categoryData->realTimeSecretAgent();
}else if($url[4] == 'secret-agent' && $url[3] == 'game-time'){
	$category->description = "Single Segment Secret Agent Speedruns (Game Time)";
	$category->rtaData = $categoryData->gameTimeSecretAgent();
}else if($url[4] == '00-agent' && $url[3] == 'real-time'){
	$category->description = "Single Segment 00 Agent Speedruns (Real Time)";
	$category->rtaData = $categoryData->realTime00Agent();
}else if($url[4] == '00-agent' && $url[3] == 'game-time'){
	$category->description = "Single Segment 00 Agent Speedruns (Game Time)";
	$category->rtaData = $categoryData->gameTimeSecretAgent();
}else if($url[4] == '100'){
	$category->description = "Single Segment 100% Speedruns (Real Time)";
	$category->rtaData = $categoryData->realTime100();
}else{
	$category->description = "Single Segment All 60 Speedruns (Real Time)";
	$category->rtaData = $categoryData->realTimeAll60();
}

echo $category;