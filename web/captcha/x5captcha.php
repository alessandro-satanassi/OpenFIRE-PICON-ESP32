<?php
include("../res/x5engine.php");
$nameList = array("jk8","g88","a2c","5ex","4yw","732","szh","we3","2my","mnw");
$charList = array("H","V","D","L","Y","A","V","H","H","2");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
