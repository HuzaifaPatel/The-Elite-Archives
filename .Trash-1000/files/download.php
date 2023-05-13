<?php

 //Link to download file...
 $url = "http://localhost/perfect-dark/player-selection/players.php?player=Kev+B.";

 //Code to get the file...
 $data = file_get_contents($url);

 //save as?
 $filename = "test.html";

 //save the file...
 $fh = fopen($filename,"w");
 fwrite($fh,$data);
 fclose($fh);

 //display link to the file you just saved...
 echo "<a href='".$filename."'>Click Here</a> to download the file...";

?>