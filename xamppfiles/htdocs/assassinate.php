<?php
#this will assassinate
#this is a comment

include_once("init.php");

$query = "SELECT * FROM `players` WHERE `id` = ".$_SESSION["id"].";";
$killerData = mysql_fetch_array(mysql_query(mysql_real_escape_string($query)));
$toKillQuery = "UPDATE `players` SET `markedForDeath` = 1 WHERE `id` = ".$killerData["target"].";";
mysql_query(mysql_real_escape_string($toKillQuery));
header("Location:action.php");


?>
