<?php
include("../res/x5engine.php");
$nameList = array("aya","myn","p3u","85s","ttt","j2h","as7","dsj","dxw","pjn");
$charList = array("3","X","2","H","H","L","8","N","2","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
