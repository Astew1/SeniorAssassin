<?php
//ONLY ACCESSABLE FROM init.php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    header("Location:index.php")
}
include_once("util/dbconnect.php");

$name = mysql_real_escape_string($_POST["name"]);
$username = mysql_real_escape_string($_POST["username"]);
$password = md5($_POST["password"]);

$query = "INSERT INTO `players` (`name`, `username`, `password`) VALUES ('$name', '$username', '$password');";
$result = mysql_query($query);
echo $query;

header("Location:../index.php");

?>
