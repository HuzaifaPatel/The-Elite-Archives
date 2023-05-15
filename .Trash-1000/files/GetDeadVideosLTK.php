<?php

class GetDeadVideosLTK extends Database{

    protected function deadVideosLTK(){
        $query = "
            SELECT
            	* 
            FROM
                video_data
            WHERE
                dead_youtube_url = 1
            AND
            	file_exists = 0
            ORDER BY 
                published_date ASC
        ";

        return $this->connectltk()->query($query);
        // return (explode("/", $_SERVER['REQUEST_URI'])[2] == 'ltk-dltk') ? $this->connectltk()->query($query) : $this->connect()->query($query);
    }
}