<?php
include("../res/x5engine.php");
$nameList = array("ygj","2zy","zdw","ngt","hkm","ned","3fh","vwu","s2c","um3");
$charList = array("P","Y","4","C","7","3","X","M","Y","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
