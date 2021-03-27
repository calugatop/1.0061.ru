<?php
include("../res/x5engine.php");
$nameList = array("34r","vrt","7v3","44r","g8y","nvp","zg4","d45","p5a","cge");
$charList = array("K","H","L","S","7","N","C","K","S","M");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
