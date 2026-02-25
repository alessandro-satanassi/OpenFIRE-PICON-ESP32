<?php
include("../res/x5engine.php");
$nameList = array("8g5","xju","8gh","7ez","z7x","er6","3vm","mz5","6yl","hk8");
$charList = array("T","5","5","Z","E","6","3","S","Y","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
