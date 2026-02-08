<?php
include("../res/x5engine.php");
$nameList = array("8jt","xwj","zhx","cym","nc7","g2t","c4j","kaw","2wy","nvx");
$charList = array("W","P","H","5","5","P","F","S","J","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
