<?php
include("../res/x5engine.php");
$nameList = array("rfv","ngp","n8m","zy5","pr3","cuv","duw","zdd","22n","43e");
$charList = array("M","V","G","N","Y","6","A","8","5","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
