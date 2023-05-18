<?php

class GetTutorialData extends Procedure{
	public function __construct(){
		parent::__construct();
		parent::set_game_selected();
		parent::setDBNameTutorials();
		echo $this->db_table_name;
	}

	public function execute(){
		$query="
			SELECT
				`$this->db_table_name`.*,`player_colors`.`hexcode`
			FROM
				`the-elite`.`$this->db_table_name`
			LEFT JOIN
				`the-elite`.`player_colors`
			ON 
                `$this->db_table_name`.`player`=`player_colors`.`player`
            WHERE
            	game = '$this->game_selected'
		";

		return $this->getDB()->query($query);
	}
}