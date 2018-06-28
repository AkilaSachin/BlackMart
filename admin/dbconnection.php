<?php
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password ="123";
$mysql_database ="blackmart_data";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("database not connected");

?>
