<?php
include("../res/x5engine.php");
$nameList = array("hx2","36y","4l3","lh3","d75","t38","d2y","rxn","jfj","h3g");
$charList = array("E","C","S","W","G","U","R","C","S","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
