<?php
class GetSingleSegmentData extends Database{

	protected function getRealTimeAgent(){
        $game_selected = (explode("/", $_SERVER['REQUEST_URI'])[1] == 'goldeneye') ? 'ge' : 'pd';

        $query = "
            SELECT
            	* 
            FROM
                video_data
            WHERE
                time_type = 'Real time'
            AND
                game = '$game_selected'
            AND
                category = 'Agent'
            ORDER BY
                published_date ASC
        ";

        return $this->connectSingleSegment()->query($query);
    }

    protected function getGameTimeAgent(){
        $game_selected = (explode("/", $_SERVER['REQUEST_URI'])[1] == 'goldeneye') ? 'ge' : 'pd';

        $query = "
            SELECT
                * 
            FROM
                video_data
            WHERE
                time_type = 'Game time'
            AND
                game = '$game_selected'
            AND
                category = 'Agent'
            ORDER BY
                published_date ASC
        ";

        return $this->connectSingleSegment()->query($query);
    }

    protected function getRealTimeSecretAgent(){
        $game_selected = (explode("/", $_SERVER['REQUEST_URI'])[1] == 'goldeneye') ? 'ge' : 'pd';

        $query = "
            SELECT
                * 
            FROM
                video_data
            WHERE
                time_type = 'Real time'
            AND
                game = '$game_selected'
            AND
                category = 'SA'
            ORDER BY
                published_date ASC
        ";

        return $this->connectSingleSegment()->query($query);
    }


    protected function getGameTimeSecretAgent(){
        $game_selected = (explode("/", $_SERVER['REQUEST_URI'])[1] == 'goldeneye') ? 'ge' : 'pd';

        $query = "
            SELECT
                * 
            FROM
                video_data
            WHERE
                time_type = 'Game time'
            AND
                game = '$game_selected'
            AND
                category = 'SA'
            ORDER BY
                published_date ASC
        ";

        return $this->connectSingleSegment()->query($query);
    }

    protected function getRealTime00Agent(){
        $game_selected = (explode("/", $_SERVER['REQUEST_URI'])[1] == 'goldeneye') ? 'ge' : 'pd';

        $query = "
            SELECT
                * 
            FROM
                video_data
            WHERE
                time_type = 'Real time'
            AND
                game = '$game_selected'
            AND
                category = '00A'
            ORDER BY
                published_date ASC
        ";

        return $this->connectSingleSegment()->query($query);
    }

    protected function getGameTime00Agent(){
        $game_selected = (explode("/", $_SERVER['REQUEST_URI'])[1] == 'goldeneye') ? 'ge' : 'pd';

        $query = "
            SELECT
                * 
            FROM
                video_data
            WHERE
                time_type = 'Game time'
            AND
                game = '$game_selected'
            AND
                category = '00A'
            ORDER BY
                published_date ASC
        ";

        return $this->connectSingleSegment()->query($query);
    }

    protected function getRealTime100(){
        $game_selected = (explode("/", $_SERVER['REQUEST_URI'])[1] == 'goldeneye') ? 'ge' : 'pd';

        $query = "
            SELECT
                * 
            FROM
                video_data
            WHERE
                time_type = 'Real time'
            AND
                game = '$game_selected'
            AND
                category = '100%'
            ORDER BY
                published_date ASC
        ";

        return $this->connectSingleSegment()->query($query);
    }

    protected function getRealTimeAll60(){
        $game_selected = (explode("/", $_SERVER['REQUEST_URI'])[1] == 'goldeneye') ? 'ge' : 'pd';
        // echo $game_selected;
        $query = "
            SELECT
                * 
            FROM
                video_data
            WHERE
                time_type = 'Real time'
            AND
                game = '$game_selected'
            AND
                category = 'All 60'
            ORDER BY
                published_date ASC
        ";

        return $this->connectSingleSegment()->query($query);
    }


}