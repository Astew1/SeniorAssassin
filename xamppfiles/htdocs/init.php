<?php
include("functions.php");
session_start();

$dbhost = "localhost";
$database = "assassinTest";
$username = "root";
$password = "";
$playerTable = "players";

mysql_connect($dbhost, $username, $password);
@mysql_select_db($database) or die( "Unable to select database");


?>
