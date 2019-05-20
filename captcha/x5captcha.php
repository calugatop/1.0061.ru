<?php
include("../res/x5engine.php");
$nameList = array("klk","kyj","e2a","7t4","m3g","2hk","nfe","62v","rkw","6ts");
$charList = array("N","R","Z","H","H","Z","U","Y","Z","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
