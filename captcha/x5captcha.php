<?php
include("../res/x5engine.php");
$nameList = array("k5a","shm","g2a","x4g","yp4","yfs","2zy","d4h","6gz","sk4");
$charList = array("P","R","A","F","G","A","C","X","Y","M");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
