<?php

class GetGoldenEyePlayerNames extends Procedure{

    public function execute(){
        $query = "
            SELECT DISTINCT
                player 
            FROM 
                `the-elite`.`the-elite-videos`
            -- WHERE
            --     game = 'ge'
            -- AND
            --     player != 'Kev_B.'
            -- ORDER BY 
            --     player ASC
        ";

        return $this->getDB()->query($query);
    }
}