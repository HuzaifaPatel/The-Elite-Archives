<?php

include $_SERVER['DOCUMENT_ROOT'].'/procedure/GetPlayerColors.php';

class PlayerColors extends GetPlayerColors{

	public function playerColors(){
		$result = $this->getPlayerColors();

		while($color = $result->fetch_assoc()){
			$colors[] = $color;
		}
		return $colors;
	}
}