<?php
include("../res/x5engine.php");
$nameList = array("nps","k3n","s8z","6f8","8fa","rlk","u3j","v6j","a53","vpx");
$charList = array("X","W","A","P","P","M","K","W","6","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
