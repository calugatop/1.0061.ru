<?php
include("../res/x5engine.php");
$nameList = array("r7g","l2z","kkf","h2g","c87","lh2","yp7","7pj","mrn","k3s");
$charList = array("G","A","J","H","Z","A","2","Y","8","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
