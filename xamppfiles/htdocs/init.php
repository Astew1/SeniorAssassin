<?php
session_start();
include_once("dbconnect.php");
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    $loggedIn = 1;
}
elseif(!empty($_POST['Username']) && !empty($_POST['password']))
{

    header("Location: login.php");

}
else
{
    header("Location: loginform.html");
}





?>
