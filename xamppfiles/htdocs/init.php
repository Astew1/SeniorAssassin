<?php

include_once("dbconnect.php");
// $dbhost = "localhost";
// $database = "seniorAssassin";
// $username = "root";
// $password = "whsSA";
// $playerTable = "players";
// mysql_connect($dbhost, $username, $password);
// @mysql_select_db($database) or die( "Unable to select database");
session_start();
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['username']))
{
    $loggedIn = 1;
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{

    header("./login.php");

}
else
{
    header("Location:loginform.html");
}
echo $loggedIn;
echo $_SESSION['LoggedIn'];
echo $_SESSION['username'];




?>
