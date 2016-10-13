<?php
  $output1 = [];
  $output2 = [];
  exec('cd /Applications/XAMPP', $output1);
  print_r($output1);
  exec('/usr/bin/git pull https://github.com/Astew1/SeniorAssassin master', $output2);
  echo "<br>";
  print_r($output2);
?>
