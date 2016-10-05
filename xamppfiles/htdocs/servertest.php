<?php
require_once("./init.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $query = "INSERT INTO players VALUES (, )";
$query = "SELECT * FROM players WHERE 1";
$frep = mysql_query($query);
$rows = mysql_num_rows($frep);
$pwhash = md5($password);
$insquery = "INSERT INTO `players` (`id`, `name`, `email`, `phone`, `target`, `kills`) VALUES ('$name', '$pwhash' '$email', 0, 0);";
$resp = mysql_query($insquery);
require_once("./footer.php");

header("Location:viewTable.php");
?>
