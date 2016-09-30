<?php
    //ONLY ACCESSABLE FROM init.php
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    //$password = md5(mysql_real_escape_string($_POST['password']));

    $checklogin = mysql_query("SELECT * FROM `users` WHERE username = '".$username."' AND password = '".$password."';");

    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);

        $_SESSION['Username'] = $username;
        $_SESSION['LoggedIn'] = 1;

        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        //header("Location:viewTable.php");
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"init.php\">click here to try again</a>.</p>";
    }

?>
