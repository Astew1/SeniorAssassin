<?php
	// require_once("init.php");
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
		echo "true";
	}
	else{
		echo "false";
	}
	echo "<br>".!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']);
echo "<br>";
print_r($_SESSION);
	//echo $_SESSION['LoggedIn'];
	//echo $_SESSION['Username'];

	require_once("index.html");
?>
