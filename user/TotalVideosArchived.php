<?php

include $_SERVER['DOCUMENT_ROOT'].'/procedure/GetTotalVideosArchived.php';

class TotalVideosArchived extends GetTotalVideosArchived{

	private function numRegVideos(){
		$result = $this->getNumRegularArchived();

		return $result->fetch_row()[0];
	}

	private function numLTKVideos(){
		$result = $this->getNumLTKArchived();

		return $result->fetch_row()[0];
	}

	private function numSingleSegmentVideos(){
		$result = $this->getNumSingleSegmentArchived();

		return $result->fetch_row()[0];
	}

	public function getNumAllVideos(){
		return $this->numRegVideos() + $this->numLTKVideos() + $this->numSingleSegmentVideos();
	}
}