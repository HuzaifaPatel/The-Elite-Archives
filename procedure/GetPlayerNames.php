<?php

class GetPlayerNames extends Database{

    protected function GetGoldenEyePlayers(){
        $query = "
            SELECT DISTINCT
                player 
            FROM 
                video_data
            WHERE
                game = 'ge'
            AND
                player != 'Kev_B.'
            ORDER BY 
                player ASC
        ";

        return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
    }

    protected function GetPerfectDarkPlayers(){
        $query = "
            SELECT DISTINCT
                player
            FROM
                video_data
            WHERE
                game = 'pd'
            AND
                player != 'Kev_B.'
            ORDER BY
                player ASC
        ";

        return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
    }
}