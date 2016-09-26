<?php

function query($queryString){
  $query = mysql_real_escape_string($queryString);
  $response = mysql_query($query);
  return $response;
}




?>
