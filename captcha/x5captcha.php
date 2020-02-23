<?php
include("../res/x5engine.php");
$nameList = array("vjl","fac","gxe","xcy","sfm","ghl","eph","m2z","m4y","fcm");
$charList = array("G","6","3","5","C","2","4","G","2","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
