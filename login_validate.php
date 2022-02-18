<?php
require_once('config.php');
$user_name = $_POST['user'];
$pass = $_POST['password'];


if ($user_name == PORTAL_USER_NAME && $pass== PORTAL_USER_PASSWORD)
{
	header("location:index_2.php");
session_start();

// store session data
$_SESSION['admin']=1;
}
else
{
	header("location:index.php");
}



?>