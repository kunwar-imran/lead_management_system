<?php
require_once('db.php');

$name = trim($_POST['name']);
$contact = trim($_POST['contact']);
$contact = preg_replace('/\s+/', '', $contact);
$enquiry_from = trim($_POST['enquiry_from']);
$email = trim($_POST['email']);
$city = trim($_POST['city']);
$lead_id = trim($_POST['lead_id']);

mysql_query("UPDATE `leads` SET `name` = '$name', `contact` = '$contact', `enquiry_from` = '$enquiry_from', `email` = '$email', `city` = '$city' WHERE `leads`.`id` = '$lead_id';");

header('location:display_lead.php?lead_id='.$lead_id);


?>