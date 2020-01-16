<?php
include("../res/x5engine.php");
$nameList = array("6kd","c7h","meu","xsj","fxj","sg7","jgd","s3x","pua","3r2");
$charList = array("C","5","E","R","3","7","F","Z","5","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
