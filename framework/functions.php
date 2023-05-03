<?php

function framework_autoload($classname){
	if(is_file('core/' . $classname . '.class.php')){
		include 'core/' . $classname . '.class.php';
	}
} 

?>