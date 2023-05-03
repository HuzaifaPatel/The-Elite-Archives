<?php

class GetDeadVideos extends Database{

    protected function getDeadVideosGoldenEye(){
        $query = "
            SELECT
            	* 
            FROM
                video_data
            WHERE
            	dead_youtube_url = 1
            AND
                file_exists = 0
            AND
                game = 'ge'
            ORDER BY 
                published_date ASC
        ";

        return $this->connect()->query($query);
        // return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
    }

    protected function getDeadVideosPerfectDark(){
        $query = "
            SELECT
                * 
            FROM
                video_data
            WHERE
                dead_youtube_url = 1
            AND
                file_exists = 0
            AND
                game = 'pd'
            ORDER BY 
                published_date ASC
        ";

        return $this->connect()->query($query);
        // return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
    }
}