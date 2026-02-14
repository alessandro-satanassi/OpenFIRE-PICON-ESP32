<?php
include("../res/x5engine.php");
$nameList = array("x8t","s3t","fhr","xfk","nhy","t3t","z4a","5gj","g47","754");
$charList = array("4","2","D","8","M","E","A","C","X","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
