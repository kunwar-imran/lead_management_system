<?php
require_once('config.php');
$link = mysql_connect("localhost",DB_USER_NAME, DB_USER_PASSWORD);
if (!$link) die('Could not connect: ' . mysql_error());
mysql_select_db(DB_NAME);
?>

