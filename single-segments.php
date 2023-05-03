<?php

include_once 'config/init.php';

$single_segments = new Template('templates/frontend/single-segments.tpl');
$single_segments->description = 'Single Segments';
$single_segments->game = explode("/", $_SERVER['REQUEST_URI'])[1];
echo $single_segments;