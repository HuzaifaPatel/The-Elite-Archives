<?php

include_once 'config/init.php';

$deadVideosltk = new Template('templates/frontend/dead-videos-ltk-dltk.tpl');

$deadVideosQuery = new DeadVideosLTK(); 
$deadVideosltk->deadVideoData = $deadVideosQuery->deadVideosLTK();

$deadVideosltk->dead = $deadVideosQuery->numDeadVideosLTK();

$deadVideosltk->color = $deadVideosltk->colors;


echo $deadVideosltk;