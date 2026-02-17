<?php
include("../res/x5engine.php");
$nameList = array("78u","8ww","vew","zlx","wev","c5t","yx6","eus","a67","a47");
$charList = array("5","N","A","H","S","4","V","W","J","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
