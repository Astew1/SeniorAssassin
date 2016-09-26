<?php

require_once("./init.php");

echo "<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>";

echo "<br>";
echo "<table style = 'border: 1px solid black, padding: 10px, width:100%;'>";
echo "  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>target</th>
    <th>chaser</th>
    <th>Kills</th>
    </tr>", PHP_EOL;
$response = query("SELECT * FROM players WHERE 1");
$rows = mysql_num_rows($response);
$i = 0;
while ($i<$rows){
  echo "  <tr>".PHP_EOL;

  echo "    <td>".mysql_result($response, $i, "id")."</td>", PHP_EOL;
  echo "    <td>".mysql_result($response, $i, "name")."</td>", PHP_EOL;
  echo "    <td>".mysql_result($response, $i, "email")."</td>", PHP_EOL;
  echo "    <td>".mysql_result($response, $i, "phone")."</td>", PHP_EOL;
  echo "    <td>".mysql_result($response, $i, "target")."</td>", PHP_EOL;
  echo "    <td>".mysql_result($response, $i, "chaser")."</td>", PHP_EOL;
  echo "    <td>".mysql_result($response, $i, "kills")."</td>", PHP_EOL;

 echo "   </tr>", PHP_EOL;
  $i++;
}

echo "</table>";

mysql_close();
echo "<br><br><br>";
echo "<a href=inputform.html> Back to inputform.html </a>";
echo "</body></html>";




 ?>
