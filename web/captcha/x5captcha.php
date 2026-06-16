<?php
include("../res/x5engine.php");
$nameList = array("aya","myn","p3u","85s","ttt","j2h","as7","dsj","dxw","pjn");
$charList = array("4","A","F","4","P","N","V","X","2","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
