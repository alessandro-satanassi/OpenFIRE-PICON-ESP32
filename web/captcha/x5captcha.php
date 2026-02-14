<?php
include("../res/x5engine.php");
$nameList = array("2ne","yt5","3fd","66m","f8j","x8g","h2w","vg3","2g6","8zr");
$charList = array("A","K","R","Y","6","S","U","W","X","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
