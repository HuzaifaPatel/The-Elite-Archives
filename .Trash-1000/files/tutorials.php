<?php

include_once 'config/init.php';

$tutorials = new Template('templates/frontend/tutorials.tpl');
$url = explode("/", $_SERVER['REQUEST_URI']);

$pdTutorials = new TutorialData();

$tutorials->color = $tutorials->colors;

if($url[1] == 'goldeneye' && $url[2] == 'tutorials'){
	$tutorials->tutorialData = $pdTutorials->GETutorialData();
	$tutorials->description = 'GoldenEye Tutorials';
}else if($url[1] == 'perfect-dark' && $url[2] == 'tutorials'){
	$tutorials->tutorialData = $pdTutorials->PDTutorialData();
	$tutorials->description = 'Perfect Dark Tutorials';
}else if($url[1] == 'goldeneye' && $url[2] == 'ltk-dltk'){
	$tutorials->tutorialData = $pdTutorials->GELTKTutorialData();
	$tutorials->description = 'GoldenEye LTK/DLTK Tutorials';
}else{
	$tutorials->tutorialData = $pdTutorials->PDLTKTutorialData();
	$tutorials->description = 'Perfect Dark LTK/DLTK Tutorials';
}

echo $tutorials;