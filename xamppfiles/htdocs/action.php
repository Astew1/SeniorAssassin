<?php
require_once("init.php");
require_once("action.html");
echo '<div class="target">';
$result = mysql_query(mysql_real_escape_string("SELECT * FROM `players` WHERE id = ".$_SESSION['id']));
$row = mysql_fetch_array($result);
$response = mysql_query(mysql_real_escape_string("SELECT `name` FROM `players` WHERE id = ".$row["target"]));
$row2 = mysql_fetch_array($response);
echo "<br> Your target is ".$row2["name"];
echo "</div>
</body>
</html>";

?>
