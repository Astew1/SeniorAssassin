<?php
require_once("./init.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// $query = "INSERT INTO players VALUES (, )";
$query = "SELECT * FROM players WHERE 1";
$frep = mysql_query($query);
$rows = mysql_num_rows($frep);

$insquery = "INSERT INTO `players` (`id`, `name`, `email`, `phone`, `target`, `kills`) VALUES ($rows, '$name', '$email', '$phone', 0, 0);";
$resp = mysql_query($insquery);
// echo "<html>
// <head>
// <style>
// table {
//     font-family: arial, sans-serif;
//     border-collapse: collapse;
//     width: 100%;
// }
//
// td, th {
//     border: 1px solid #dddddd;
//     text-align: left;
//     padding: 8px;
// }
//
// tr:nth-child(even) {
//     background-color: #dddddd;
// }
// </style>
// </head>
// <body>";
//
// echo "<br>";
// echo "<table style = 'border: 1px solid black, padding: 10px, width:100%;'>";
// echo "<tr>
// <th>ID</th>
// <th>Name</th>
// <th>Email</th>
// <th>Phone</th>
// <th>target</th>
// <th>Kills</th>
// </tr>";
// $response = mysql_query("SELECT * FROM players WHERE 1");
// $rows = mysql_num_rows($response);    //THIS SHOULD BE CHANGED, IN THE CASE THAT `id` > numrows, i.e. if one is deleted
// $i = 0;


// while ($i<$rows){
//   echo "<tr>";
//
//   echo "<td>".mysql_result($response, $i, "id")."</td>", PHP_EOL;
//   echo "<td>".mysql_result($response, $i, "name")."</td>", PHP_EOL;
//   echo "<td>".mysql_result($response, $i, "email")."</td>", PHP_EOL;
//   echo "<td>".mysql_result($response, $i, "phone")."</td>", PHP_EOL;
//   echo "<td>".mysql_result($response, $i, "target")."</td>", PHP_EOL;
//   echo "<td>".mysql_result($response, $i, "kills")."</td>", PHP_EOL;
//
//  echo "</tr>";
//   $i++;
// }

// echo "</table>";

mysql_close();
// echo "<br><br><br>";
// echo "<a href=inputform.html> Back to inputform.html </a>";
// echo "</body></html>"
header("Location:viewTable.php");
?>
