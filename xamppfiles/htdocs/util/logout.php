<?php

session_start();
unset($_SESSION['Username']);
unset($_SESSION['LoggedIn']);
header("Location:index.php");



?>
