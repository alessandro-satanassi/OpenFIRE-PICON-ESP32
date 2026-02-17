<?php
include("../res/x5engine.php");
$nameList = array("g85","f5u","48y","crg","m6u","fhf","fnt","se5","puk","7yg");
$charList = array("5","F","6","C","N","C","7","R","T","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
