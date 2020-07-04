<?php
include("../res/x5engine.php");
$nameList = array("z7f","jl2","7h4","hem","4wh","3pr","6as","fzz","h6w","hud");
$charList = array("P","E","D","7","F","5","K","8","8","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
