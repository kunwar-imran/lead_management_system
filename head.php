<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//$actual_link = strtok("$_SERVER[REQUEST_URI]", "?");

//if ($actual_link == "/ap/" || $actual_link == "/ap/index.php"){
//}
//else{

if(isset($_SESSION['admin'])){
	}
else {
	header("location:index.php");

	} 

//}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon-76.png">
  <link rel="icon" type="image/png" href="assets/img/icon-96.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Lead Management System
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

</head>