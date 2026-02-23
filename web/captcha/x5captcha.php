<?php
include("../res/x5engine.php");
$nameList = array("ejr","je3","hwl","dgr","dhx","3s5","l5k","8xr","4wn","zlx");
$charList = array("4","P","4","C","W","6","Y","F","M","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
