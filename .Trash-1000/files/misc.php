<?php

include_once 'config/init.php';

$misc = new Template('templates/frontend/misc.tpl');

$tutorialData = new TutorialData();
$misc->miscTutorialData = $tutorialData->miscData();
$misc->description = "Miscellaneous Tutorials";
echo $misc;