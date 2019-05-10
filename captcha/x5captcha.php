<?php
include("../res/x5engine.php");
$nameList = array("d2v","g4x","zzh","sek","may","e23","txd","x7f","vlc","xy2");
$charList = array("S","K","A","H","M","3","J","X","T","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
