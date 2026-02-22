<?php
include("../res/x5engine.php");
$nameList = array("m62","man","3jk","4j2","mff","px2","f4r","php","eed","nw7");
$charList = array("4","Z","Y","F","7","Z","L","A","Y","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
