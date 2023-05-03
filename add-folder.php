<?php

include_once 'config/init.php';

$url = explode("/", $_SERVER['REQUEST_URI']);
$deadVideos = new Template('templates/frontend/add-folder.tpl');

echo $deadVideos;