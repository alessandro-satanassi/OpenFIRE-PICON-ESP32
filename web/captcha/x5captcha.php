<?php
include("../res/x5engine.php");
$nameList = array("xpl","5f6","ged","86y","n7p","clg","jjl","phn","g2p","jel");
$charList = array("F","H","3","T","E","Z","4","V","F","M");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
