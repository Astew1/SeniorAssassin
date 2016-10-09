<?php
//This will seed the targets and prevTargets in the databse

require_once("./init.php");

$initQuery = "SELECT `id`, `target`, `chaser` FROM `$playerTable` WHERE 1";  //Get a list of all of the ID, Target, and Chaser values

$response = query($initQuery);

$rows = mysql_num_rows($response);                              //The number of rows

$prePplArr = [];
for ($i = 0; $i<$rows; $i++){
  $prePplArr[] = mysql_fetch_array($response);
}

shuffle($prePplArr);                                          //Shuffle the array

for ($i = 1; $i<$rows-1; $i++){                               //Create the doubly-linked part
    $prePplArr[$i]["target"] = $prePplArr[$i+1]["id"];        //target = next ID, chaser = prev ID
    $prePplArr[$i]["chaser"] = $prePplArr[$i-1]["id"];
}
$prePplArr[$rows-1]["target"] = $prePplArr[0]["id"];
$prePplArr[$rows-1]["chaser"] = $prePplArr[$rows-2]["id"];
$prePplArr[0]["target"] = $prePplArr[1]["id"];                //Handle endpoints
$prePplArr[0]["chaser"] = $prePplArr[$rows-1]["id"];

$pplArr = $prePplArr;

$query = "UPDATE `$playerTable` SET `target` = CASE";

$max = count($pplArr);
for ($i = 0; $i<$max; $i++){
    $query .= " WHEN `id` = " . $pplArr[$i]["id"] . " THEN " . strval(intval($pplArr[$i]["target"]));
}
$query .= " END WHERE `id` IN (";
for($j = 0; $j<$max-1; $j++){
  $query .= $pplArr[$j]["id"].", ";
}
$query .= $pplArr[$max-1]["id"].");";
// echo ($query);
query($query);

$chaserQuery = "UPDATE `$playerTable` SET `chaser` = CASE";
for ($i = 0; $i<$max; $i++){
    $chaserQuery .= " WHEN `id` = " . $pplArr[$i]["id"] . " THEN " . strval(intval($pplArr[$i]["chaser"]));
}
$chaserQuery .= " END WHERE `id` IN (";
for($j = 0; $j<$max-1; $j++){
  $chaserQuery .= $pplArr[$j]["id"].", ";
}
$chaserQuery .= $pplArr[$max-1]["id"].");";
query($chaserQuery);

header("Location:index.php");

?>
