<?php
//ONLY ACCESSABLE FROM init.php
$dbhost = "localhost";
$database = "seniorAssassin";
$username = "root";
$password = "whsSA";
$playerTable = "players";
mysql_connect($dbhost, $username, $password);
@mysql_select_db($database) or die( "Unable to select database");

$name = mysql_real_escape_string($_POST["name"]);
$username = mysql_real_escape_string($_POST["username"]);
$password = md5($_POST["password"]);

$query = "INSERT INTO `players` (`name`, `username`, `password`) VALUES ('$name', '$username', '$password');";
$result = mysql_query($query);
echo $query;

header("Location:index.php");

?>
