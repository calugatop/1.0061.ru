<?php
include("../res/x5engine.php");
$nameList = array("skc","y28","y8h","7tk","rly","6le","ehj","yes","ael","2ea");
$charList = array("A","E","5","6","Y","H","X","8","K","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
