<?php

require_once('Configuration.php');

class Framework{

	private static $db;

	public static function init(){
		require 'framework' . '/functions.php';
		spl_autoload_register('framework_autoload');
		self::$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
	}


	public static function getDB(){
		return self::$db;
	}


	public static function call($procedure){
		include 'procedure/' . $procedure . '.php';
		$callback = new $procedure();
		return $callback->execute();
	}
}