<?php
include("../res/x5engine.php");
$nameList = array("cz5","2j2","4nt","tel","mzn","jg6","r34","e3e","uw2","l5x");
$charList = array("2","2","J","X","8","N","T","W","R","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
