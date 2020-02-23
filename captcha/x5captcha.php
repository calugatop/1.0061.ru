<?php
include("../res/x5engine.php");
$nameList = array("saa","pv2","nnf","kn4","lza","7dk","fnt","ldp","7xt","8x6");
$charList = array("K","A","M","W","E","S","3","Y","P","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
