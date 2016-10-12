<?php
session_start();
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    $loggedIn = 1;
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{

    include_once("./login.php");

}
else
{
    header("Location:loginform.html");
}

?>
