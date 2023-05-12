<?php

include $_SERVER['DOCUMENT_ROOT'].'/procedure/GetFilterProperties.php';

class FilterProperties extends GetFilterProperties{

	public function getStages(){
		$result = parent::getStages();

		while($stage = $result->fetch_assoc()){

			switch($stage['stage']){
				case "surface1":
					$stage['stage'] = "surface 1";
					break;
				case "bunker1":
					$stage['stage'] = "bunker 1";
					break;
				case "surface2":
					$stage['stage'] = "surface 2";
					break;
				case "bunker2":
					$stage['stage'] = "bunker 2";
					break;
			}

			$stage['stage'] = ucfirst($stage['stage']);
			$stages[] = $stage;
		}

		return $stages;

	}
	
}