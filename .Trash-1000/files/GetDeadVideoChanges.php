<?php

class GetDeadVideoChanges extends Database{

    protected function getDeadVideoChanges(){
        $query = "
            SELECT
            	* 
            FROM
                changes
        ";

        return $this->connectDeadVideoChanges()->query($query);
    }
}