<?php
include("../res/x5engine.php");
$nameList = array("aya","myn","p3u","85s","ttt","j2h","as7","dsj","dxw","pjn");
$charList = array("W","G","2","2","V","F","L","M","L","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
