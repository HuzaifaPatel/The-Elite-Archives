<?php

class GetGoldenEyePlayerNames extends Procedure{
    public function __construct(){
        parent::__construct();
        parent::setDBName();
    }

    public function execute(){
        $query = "
            SELECT DISTINCT
                player 
            FROM 
                `the-elite`.`$this->db_table_name`
            WHERE
                game = 'ge'
            AND
                player != 'Kev_B.'
            ORDER BY 
                player ASC
        ";

        return $this->getDB()->query($query);
    }
}