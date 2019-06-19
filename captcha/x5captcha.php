<?php
include("../res/x5engine.php");
$nameList = array("3h3","753","3r6","wgz","kjt","5jt","jfp","dfs","5a6","els");
$charList = array("T","M","C","S","E","K","R","K","Z","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
