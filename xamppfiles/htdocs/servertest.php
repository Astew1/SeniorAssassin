<?php
require_once("./init.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// $query = "INSERT INTO players VALUES (, )";
$query = "SELECT * FROM players WHERE 1";
$frep = mysql_query($query);
$rows = mysql_num_rows($frep);

$insquery = "INSERT INTO `players` (`id`, `name`, `email`, `phone`, `target`, `kills`) VALUES ($rows, '$name', '$email', '$phone', 0, 0);";
$resp = mysql_query($insquery);
require_once("./footer.php");

header("Location:viewTable.php");
?>
