<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "gamezaddiction";

$connect = @mysql_connect($server, $username, $password);
mysql_select_db($db_name, $connect);

?>