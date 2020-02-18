<?php
include("../res/x5engine.php");
$nameList = array("z8h","h4c","ldj","js8","wa7","nrh","ud6","p7h","xjv","x7g");
$charList = array("7","R","3","M","Y","A","U","K","2","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
