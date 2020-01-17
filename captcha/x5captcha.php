<?php
include("../res/x5engine.php");
$nameList = array("tcd","h5p","5np","xyj","lra","pdc","e2m","rsw","em3","4al");
$charList = array("H","7","E","J","A","K","2","6","S","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
