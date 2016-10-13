<?php
//include this and it will create a variable $stats that contains two associative elements "alive" and "kills"
//that contain exactly what you think they contain

$aliveQuery = "SELECT COUNT(`id`)-SUM(`killed`) FROM `players`";
$killsQuery = "SELECT SUM(`killed`) FROM `players`";

$aliveResp = mysql_fetch_array(mysql_query(mysql_real_escape_string($aliveQuery)));
$killsResp = mysql_fetch_array(mysql_query(mysql_real_escape_string($killsQuery)));

$stats = array("alive"=>$aliveResp[0], "kills"=>$killsResp[0]);

?>
