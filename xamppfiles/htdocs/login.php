<?php
    require_once("dbconnect.php");
    session_start();
    $username = mysql_real_escape_string($_POST['Username']);
    $password = md5($_POST['password']);
    $query = "SELECT * FROM `players` WHERE username = '".$username."' AND password = '".$password."';";
    $checklogin = mysql_query($query);

    if((@mysql_num_rows($checklogin) == 1))
    {
        $row = mysql_fetch_array($checklogin);

        $_SESSION['Username'] = $username;
        $_SESSION['LoggedIn'] = 1;
        $_SESSION['id'] = $row["id"];

        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        //header("Location: index.php");
        echo "<br>If you haven't been redirected: <a href = index.php> Home Page </a>";

    }
    else
    {
      // echo $checklogin;
       //echo "is it false?: ";
      //  //echo $checklogin==false;
      //  print_r(mysql_fetch_array($checklogin));
      //  echo "rowsnums: ".mysql_num_rows($checklogin);
      // print_r (mysql_fetch_array($checklogin));
      // echo $query;
      // echo "<br>";
      // echo $checklogin;
      // echo "<br>";
      // echo $checklogin===false;
      // echo "<br>";
      // if($checklogin===false){
      //   echo "checklogin === false";
      // }
      // echo "<br>";
      // if($checklogin==false){
      //   echo "checklogin==false";
      // }
      // echo "<br>";
      // echo mysql_num_rows($checklogin);
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"init.php\">click here to try again</a>.</p>";
    }
?>
