<?php
include("../res/x5engine.php");
$nameList = array("gzn","wc7","3c4","fal","wvn","8p7","me3","27n","pss","xyr");
$charList = array("E","Z","R","Y","T","V","4","J","D","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
