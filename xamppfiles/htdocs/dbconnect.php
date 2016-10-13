<?php
if (!mysql_ping()){
    $dbhost = "localhost";
    $database = "seniorAssassin";
    $username = "root";
    $password = "whsSA";
    $playerTable = "players";
    mysql_connect($dbhost, $username, $password);
    @mysql_select_db($database) or die( "Unable to select database");
}
?>
