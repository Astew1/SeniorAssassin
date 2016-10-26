<?php
	// require_once("init.php");
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
		echo "true";
	}
	else{
		echo "false";
	}
	echo !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']);
  //echo $_SESSION['LoggedIn'];
	//echo $_SESSION['Username'];

	require_once("index.html");
?>
