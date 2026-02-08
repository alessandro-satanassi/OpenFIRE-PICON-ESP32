<?php
include("../res/x5engine.php");
$nameList = array("s4z","8sh","ue3","uxs","n2h","xzz","pzl","478","kau","xd7");
$charList = array("M","7","J","W","V","H","2","R","L","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
