<?php
$id = intval($_POST["id"]);

require_once("./init.php");

mysql_connect("localhost", $username, $password);
@mysql_select_db($database) or die("Unable to select database");

$query = "UPDATE `players` SET `kills`kills = `target` + 1 WHERE `players`.`id` = $id";
mysql_query($query);

header("Location:viewTable.php");




?>
