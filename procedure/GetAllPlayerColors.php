<?php

class GetAllPlayerColors extends Procedure{
	public function __construct(){
		parent::__construct();
		$this->execute();
	}

	protected function execute(){
		
		$query = "
			SELECT
				hexcode
			FROM 
				`player_colors`
		";

		return $this->getDB()->query($query);
	}
}