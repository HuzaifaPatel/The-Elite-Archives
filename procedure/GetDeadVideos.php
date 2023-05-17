<?php

class GetDeadVideos extends Procedure{

	public function __construct(){
		parent::__construct();
		parent::set_game_selected();
		parent::setDBName();	
	}

	public function execute(){
        $query = "
            SELECT 
                `$this->db_table_name`.*, `player_colors`.`hexcode`
            FROM 
                `the-elite`.`$this->db_table_name` 
            LEFT JOIN 
                `the-elite`.`player_colors` 
            ON 
                `$this->db_table_name`.`player`=`player_colors`.`player` 
            WHERE 
                dead_youtube_url = 1 
            AND 
                file_exists = 0 
            AND 
                game = 'ge' 
            ORDER BY 
                published_date 
            ASC
        ";

        return $this->getDB()->query($query);
    }
}