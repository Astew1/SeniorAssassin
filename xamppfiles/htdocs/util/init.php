<?php
echo "before dbconnect";
include_once("util/dbconnect.php");
echo "after dbconnect";
include_once("util/logincheck.php");
echo "after logincheck";
echo "<br> ". $_SESSION["Username"]. " : ".$_SESSION["LoggedIn"];
?>
