<?php
include("../res/x5engine.php");
$nameList = array("lh6","zl7","c2c","hdg","2lt","chf","den","v4s","emy","xkv");
$charList = array("8","V","2","M","Y","L","L","4","6","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
