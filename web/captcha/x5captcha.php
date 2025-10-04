<?php
include("../res/x5engine.php");
$nameList = array("462","hc7","wmx","pjc","sxv","yfh","mkt","ktd","zuv","far");
$charList = array("4","J","T","P","E","Z","E","5","V","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
