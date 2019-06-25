<?php
include("../res/x5engine.php");
$nameList = array("zpw","umk","u4c","v77","xl2","szg","6m6","2jj","g52","z6y");
$charList = array("G","D","V","N","C","4","R","Z","X","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
