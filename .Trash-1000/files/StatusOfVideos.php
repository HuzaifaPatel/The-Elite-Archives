<?php

include $_SERVER['DOCUMENT_ROOT'].'/procedure/GetStatusOfVideos.php';

class StatusOfVideos extends GetStatusOfVideos{

	public function getNumAvailableVideos(){
		$result = $this->getAvailableVideos();

		return $result->num_rows;
	}

	public function getNumUnavailableVideos(){
		$result = $this->getUnavailableVideos();

		return $result->num_rows;

	}
}