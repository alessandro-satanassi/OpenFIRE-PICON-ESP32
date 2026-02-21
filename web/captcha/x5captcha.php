<?php
include("../res/x5engine.php");
$nameList = array("n2g","f77","tau","z6d","7yr","k8f","lm7","dcd","4ys","47k");
$charList = array("5","7","Z","4","N","C","3","7","3","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
