<?php
include("../res/x5engine.php");
$nameList = array("y7h","g7k","ueh","nju","fe8","gs2","8ue","z7e","26f","rny");
$charList = array("K","K","N","E","S","E","3","Z","N","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
