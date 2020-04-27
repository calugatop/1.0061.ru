<?php
include("../res/x5engine.php");
$nameList = array("hz7","jut","vya","nuz","78x","xrg","gnd","dpg","wk4","d4e");
$charList = array("4","Z","X","N","N","L","C","G","D","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
