<?php
include("../res/x5engine.php");
$nameList = array("pf2","vej","vlg","5cf","gju","eh3","4zr","m28","km8","yye");
$charList = array("D","V","6","A","L","P","H","K","G","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
