<?php

class DeadVideos extends GetDeadVideos{
    public function deadVideosGoldenEye(){
        
        $result = parent::getDeadVideosGoldenEye();
        $playerData = array();

        while($data = $result->fetch_assoc()){

            switch($data['difficulty']){
                case "SA":
                    $data['difficulty'] = ($data['game'] == 'ge') ? 'Secret Agent' : 'Special Agent'; 
                    break;
                case "PA":
                    $data['difficulty'] = "Perfect Agent";
                    break;
                case "00A":
                    $data['difficulty'] = "00 Agent";
                    break;
            }

            switch($data['stage']){
                case "surface1":
                    $data['stage'] = "surface 1";
                    break;
                case "bunker1":
                    $data['stage'] = "bunker 1";
                    break;
                case "surface2":
                    $data['stage'] = "surface 2";
                    break;
                case "bunker2":
                    $data['stage'] = "bunker 2";
                    break;
                case "deep-sea":
                    $data['stage'] = "deep sea";
                    break;
                case "maian-sos":
                    $data['stage'] = "Maian SOS";
                    break;
                case "air-base":
                    $data['stage'] = "Air Base";
                    break;
                case "skedar-ruins":
                    $data['stage'] = "Skedar Ruins";
                    break;
                case "attack-ship":
                    $data['stage'] = "Attack Ship";
                    break;
                case "af1":
                    $data['stage'] = "Air Force One";
                    break;
                case "mbr":
                    $data['stage'] = "mBR";
                    break;
                case "pelagic":
                    $data['stage'] = "pelagic II";
                    break;
                case "ci":
                    $data['stage'] = "cI";
                    break;
                case "war":
                    $data['stage'] = "war!";
                    break;
            }

            $data['stage'] = ucfirst($data['stage']);
            $playerData[] = $data;
        }

        return $playerData;
    }


    public function deadVideosPerfectDark(){
        
        $result = parent::getDeadVideosPerfectDark();
        $playerData = array();

        while($data = $result->fetch_assoc()){

            switch($data['difficulty']){
                case "SA":
                    $data['difficulty'] = ($data['game'] == 'ge') ? 'Secret Agent' : 'Special Agent'; 
                    break;
                case "PA":
                    $data['difficulty'] = "Perfect Agent";
                    break;
                case "00A":
                    $data['difficulty'] = "00 Agent";
                    break;
            }

            switch($data['stage']){
                case "surface1":
                    $data['stage'] = "surface 1";
                    break;
                case "bunker1":
                    $data['stage'] = "bunker 1";
                    break;
                case "surface2":
                    $data['stage'] = "surface 2";
                    break;
                case "bunker2":
                    $data['stage'] = "bunker 2";
                    break;
                case "deep-sea":
                    $data['stage'] = "deep sea";
                    break;
                case "maian-sos":
                    $data['stage'] = "Maian SOS";
                    break;
                case "air-base":
                    $data['stage'] = "Air Base";
                    break;
                case "skedar-ruins":
                    $data['stage'] = "Skedar Ruins";
                    break;
                case "attack-ship":
                    $data['stage'] = "Attack Ship";
                    break;
                case "af1":
                    $data['stage'] = "Air Force One";
                    break;
                case "mbr":
                    $data['stage'] = "mBR";
                    break;
                case "pelagic":
                    $data['stage'] = "pelagic II";
                    break;
                case "ci":
                    $data['stage'] = "cI";
                    break;
                case "war":
                    $data['stage'] = "war!";
                    break;
            }

            $data['stage'] = ucfirst($data['stage']);
            $playerData[] = $data;
        }

        return $playerData;
    }

    // public function numDeadVideos(){
    //     $result = parent::deadVideos();
    //     return $result->num_rows;
    // }
}