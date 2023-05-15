<?php

include $_SERVER['DOCUMENT_ROOT'].'/procedure/GetDeadVideoChanges.php';

class DeadVideoChanges extends GetDeadVideoChanges{
    public function deadVideoChanges(){
        
        $result = parent::getDeadVideoChanges();
        $playerData = array();

        while($data = $result->fetch_assoc()){
            $playerData[] = $data;
        }

        return $playerData;
    }
}