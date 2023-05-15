<?php
class GetTutorialData extends Database{

	protected function getGETutorialData(){
        $query = "
            SELECT
            	* 
            FROM
                goldeneye
        ";

        return $this->connectTutorial()->query($query);
    }

    protected function getPDTutorialData(){
        $query = "
            SELECT
            	* 
            FROM
                perfect_dark
        ";

        return $this->connectTutorial()->query($query);
    }

    protected function getGELTKTutorialData(){
        $query = "
            SELECT
            	* 
            FROM
                goldeneye_ltk
        ";

        return $this->connectTutorial()->query($query);
    }

    protected function getPDLTKTutorialData(){
        $query = "
            SELECT
            	* 
            FROM
                perfect_dark_ltk
        ";

        return $this->connectTutorial()->query($query);
    }

	protected function getMiscTutorialData(){
        $query = "
            SELECT
            	* 
            FROM
                miscellaneous_tutorials
        ";

        return $this->connectTutorial()->query($query);
    }
}