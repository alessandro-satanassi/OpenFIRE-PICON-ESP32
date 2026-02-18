<?php
include("../res/x5engine.php");
$nameList = array("7f5","ehc","yvk","8wh","kdc","4ar","8t5","3x4","tme","jyr");
$charList = array("Z","M","E","K","7","H","3","M","N","M");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
