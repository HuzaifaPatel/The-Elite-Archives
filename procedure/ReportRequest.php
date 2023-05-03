<?php 
    include $_SERVER['DOCUMENT_ROOT'] . "/lib/Database.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/lib/db_connection.php";

    class ReportRequest extends Database{
        private function getReportedRow(){
            $rankings_id = str_replace(' ', '', $_POST['rankings_id']);
            $difficulty = str_replace(' ', '', $_POST['difficulty']);

            $query = "
                SELECT
                    *
                FROM
                    video_data
                WHERE 
                    rankings_id = '$rankings_id';
            ";

            if($difficulty == "LTK" || $difficulty == "DLTK"){
                return $this->connectltk()->query($query);
            }else{
                return $this->connect()->query($query);   
            }
        }

        public function checkIfExists(){
            $rankings_url = str_replace(' ', '', $_POST['rankings_url']);

            $query = "
                SELECT 
                    *
                FROM
                    changes
                WHERE
                    rankings_url = '$rankings_url';
            ";
            
            return $this->connectDeadVideoChanges()->query($query)->num_rows;
        }

        public function setChangeLog(){
            $row = $this->getReportedRow();
            $row = $row->fetch_assoc();
            $player = $row['player'];
            $change = ucwords($this->renameStage($row['stage'])) . " " . $row['difficulty'] . " " . $row['regular_time'];
            date_default_timezone_set('America/Toronto');
            $date = date("Y-m-d");
            $time = date("h:i:s a");
            $rankings_url = $row['rankings_url'];

            $query = "
                INSERT INTO 
                    `changes` (`player`, `change`, `date_accepted`, `time_accepted`, `rankings_url`) 
                VALUES 
                    ('$player', '$change', '$date', '$time', '$rankings_url')
            ";

            return $this->connectDeadVideoChanges()->query($query);
        }

        public function markYoutubeVidNotDead(){
            $rankings_id = str_replace(' ', '', $_POST['rankings_id']);
            $difficulty = str_replace(' ', '', $_POST['difficulty']);

            $query = "
                UPDATE
                    video_data
                SET
                    dead_youtube_url = 0
                WHERE
                    rankings_id = '$rankings_id';
            ";
            
            if($difficulty == "LTK" || $difficulty == "DLTK"){
                return $this->connectltk()->query($query);
            }else{
                return $this->connect()->query($query);
            }
        }


        public function renameStage($stage){
            $data['stage'] = $stage;
            
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
                    $data['stage'] = "Defense";
                    break;
                case "war":
                    $data['stage'] = "war!";
                    break;
            }

            return $data['stage'];
        }

        private function fileIO($data){
            $filename = "error.txt";

            $file = fopen($filename, "a");
            //$chmod($file, 0777);
            
            fwrite($file, $data . "\n");
            fclose($file);
        }
    }

    $object = new ReportRequest();

    if($object->checkIfExists() == 0){
        $object->markYoutubeVidNotDead();
        $object->setChangeLog();
    }

// $db = new Database();
// $db->connectDeadVideoChanges()->query("INSERT INTO `changes` (`change`, `date_accepted`, `time_accepted`, `rankings_url`) VALUES ('aaa','sss','2:10','fff')");


// $sql = "INSERT INTO `nlcc_ver1`.`tUsers`
//        (`userID`, `userName`, `userPassword`, `userHash`,
//         `user_first_name`, `user_last_name`, `user_corps`,
//         `is_admin`, `is_trg`, `is_sup`, `is_co`)
//        VALUES (NULL, '" . $userName . "', '" . $hash . "', '" . $salt . "', '" .
//                $f_name . "', '" . $l_name . "', '" . $corps . "', '" . $admin .
//                "', '" . $trg . "', '" . $sup . "', '" . $co . "')";