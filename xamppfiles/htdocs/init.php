<?php
include("functions.php");
$dbhost = "localhost";
$database = "assassinTest";
$username = "root";
$password = "";
$playerTable = "players";

mysql_connect($dbhost, $username, $password);
@mysql_select_db($database) or die( "Unable to select database");

session_start();
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    $loggedIn = 1;
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    include_once("./login.php");
    header("Location:init.php");
}
else
{
    header("Location:loginform.html");
}


?>
