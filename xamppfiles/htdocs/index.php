<?php
	// require_once("init.php");
	session_start();
  print_r($_SESSION);
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
		echo "true";
	}
	else{
		echo "false";
	}
  echo "<br>";

	//echo $_SESSION['LoggedIn'];
	//echo $_SESSION['Username'];

	// require_once("index.html");
?>
