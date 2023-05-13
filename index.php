<?php

require 'core/Framework.class.php';

Framework::init();

if(isset($_GET['request'])) :
	$controller = explode("/", $_GET['request'])[0] . 'Controller';
else :
	$controller = 'IndexController';
endif;


include 'framework/controller/' . $controller . '.class.php';

new $controller;