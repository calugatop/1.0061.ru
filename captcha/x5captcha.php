<?php
include("../res/x5engine.php");
$nameList = array("hw7","6v7","sln","5d5","lvu","ssm","cnk","haz","zee","ane");
$charList = array("P","H","M","4","L","3","K","T","2","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
