<?php

class GetPerfectDarkPlayerNames extends Procedure{
    public function execute(){
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

        return $this->getDB()->query($query);
    }
}