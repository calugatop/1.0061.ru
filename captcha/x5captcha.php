<?php
include("../res/x5engine.php");
$nameList = array("xax","e8f","ajl","zuk","v3t","ver","pwu","jpf","j6v","ufv");
$charList = array("Y","E","G","4","U","4","L","X","W","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
