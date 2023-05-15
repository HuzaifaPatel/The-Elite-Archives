<?php

include $_SERVER['DOCUMENT_ROOT'].'/procedure/GetTutorialData.php';

class TutorialData extends GetTutorialData{

	public function GETutorialData(){

		$result = $this->getGETutorialData();

		$tutorialData = array();

		while($data = $result->fetch_assoc()){
			$tutorialData[] = $data;
		}

		return $tutorialData;
	}

	public function PDTutorialData(){

		$result = $this->getPDTutorialData();

		$tutorialData = array();

		while($data = $result->fetch_assoc()){
			$tutorialData[] = $data;
		}

		return $tutorialData;
	}

	public function GELTKTutorialData(){

		$result = $this->getGELTKTutorialData();

		$tutorialData = array();

		while($data = $result->fetch_assoc()){
			$tutorialData[] = $data;
		}

		return $tutorialData;
	}
	
	public function PDLTKTutorialData(){

		$result = $this->getPDLTKTutorialData();

		$tutorialData = array();

		while($data = $result->fetch_assoc()){
			$tutorialData[] = $data;
		}

		return $tutorialData;
	}

	public function miscData(){

		$result = $this->getMiscTutorialData();

		$tutorialData = array();

		while($data = $result->fetch_assoc()){
			$tutorialData[] = $data;
		}

		return $tutorialData;
	}
}