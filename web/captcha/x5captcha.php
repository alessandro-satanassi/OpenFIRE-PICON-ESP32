<?php
include("../res/x5engine.php");
$nameList = array("86e","afm","d5v","vkm","5rw","8tw","e7t","2dn","gz8","jn4");
$charList = array("E","D","5","T","S","V","L","C","7","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
