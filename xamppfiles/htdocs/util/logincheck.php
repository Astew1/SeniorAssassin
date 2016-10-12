<?php
session_start();
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    $loggedIn = 1;
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{

    include_once("util/login.php");

}
else
{
    header("Location:".$_SERVER['DOCUMENT_ROOT']."/util/loginform.html");
}

?>
