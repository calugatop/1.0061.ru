<?php
include("../res/x5engine.php");
$nameList = array("tce","z85","jny","vn6","u7e","w6r","n8r","py2","sa8","p35");
$charList = array("D","R","8","A","S","S","U","X","M","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
