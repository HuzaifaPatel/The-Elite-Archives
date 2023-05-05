<?php

class getNumRegularArchived extends Procedure{

	public function execute(){
		$query = "
			SELECT 
				COUNT(*) 
			FROM 
				video_data
		";

		return $this->getDB()->query($query);
	}

	// protected function getNumLTKArchived(){
	// 	$query = "
	// 		SELECT 
	// 			COUNT(*) 
	// 		FROM 
	// 			video_data
	// 	";

	// 	return $this->connectltk()->query($query);
	// }

	// protected function getNumSingleSegmentArchived(){
	// 	$query = "
	// 		SELECT 
	// 			COUNT(*) 
	// 		FROM 
	// 			video_data
	// 	";

	// 	return $this->connectSingleSegment()->query($query);
	// }
}