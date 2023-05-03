<?php

include $_SERVER['DOCUMENT_ROOT'].'/procedure/GetSingleSegmentData.php';

class SingleSegmentData extends GetSingleSegmentData{

	public function realTimeAgent(){

		$result = $this->getRealTimeAgent();
		$realTimeAgent = array();

		while($data = $result->fetch_assoc()){
			$realTimeAgent[] = $data;
		}

		return $realTimeAgent;
	}

	public function gameTimeAgent(){

		$result = $this->getGameTimeAgent();
		$gameTimeAgent = array();

		while($data = $result->fetch_assoc()){
			$gameTimeAgent[] = $data;
		}

		return $gameTimeAgent;
	}

	public function realTimeSecretAgent(){

		$result = $this->getrealTimeSecretAgent();
		$realTimeSecretAgent = array();

		while($data = $result->fetch_assoc()){
			$realTimeSecretAgent[] = $data;
		}

		return $realTimeSecretAgent;
	}

	public function gameTimeSecretAgent(){

		$result = $this->getGameTimeSecretAgent();
		$gameTimeSecretAgent = array();

		while($data = $result->fetch_assoc()){
			$gameTimeSecretAgent[] = $data;
		}

		return $gameTimeSecretAgent;
	}

	public function realTime00Agent(){

		$result = $this->getrealTime00Agent();
		$realTime00Agent = array();

		while($data = $result->fetch_assoc()){
			$realTime00Agent[] = $data;
		}

		return $realTime00Agent;
	}

	public function gameTime00Agent(){

		$result = $this->getGameTime00Agent();
		$gameTime00Agent = array();

		while($data = $result->fetch_assoc()){
			$gameTime00Agent[] = $data;
		}

		return $gameTime00Agent;
	}

	public function realTime100(){

		$result = $this->getrealTime100();
		$realTime100 = array();

		while($data = $result->fetch_assoc()){
			$realTime100[] = $data;
		}

		return $realTime100;
	}

	public function realTimeAll60(){

		$result = $this->getRealTimeAll60();
		$realTimeAll60 = array();

		while($data = $result->fetch_assoc()){
			$realTimeAll60[] = $data;
		}

		return $realTimeAll60;
	}


}