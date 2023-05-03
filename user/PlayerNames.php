<?php

    include $_SERVER['DOCUMENT_ROOT'].'/procedure/GetPlayerNames.php';

    class PlayerNames extends GetPlayerNames{

        public function showAllGEPlayers(){
             $result = $this->getGoldenEyePlayers();
            
             while($player = $result->fetch_assoc()){
                 $players[] = str_replace("_"," ",$player);
             }
             return $players;
        }


        public function getNumGEPlayerRows(){
            $result = $this->getGoldenEyePlayers();

            return $result->num_rows;
        }

        public function showAllPDPlayers(){
             $result = $this->getPerfectDarkPlayers();
            
             while($player = $result->fetch_assoc()){
                 $players[] = str_replace("_"," ",$player);
             }
             return $players;
        }


        public function getNumPDPlayerRows(){
            $result = $this->getPerfectDarkPlayers();

            return $result->num_rows;
        }
    }