<?php
require_once('db.php');
$name = trim($_POST['name']);
$contact = trim($_POST['contact']);

$contact = preg_replace('/\s+/', '', $contact);

$enquiry_for = trim($_POST['enquiry_for']);
$status = trim($_POST['status']);
$enquiry_from = trim($_POST['enquiry_from']);
$email = trim($_POST['email']);
$comment = trim($_POST['comment']);
$role = trim($_POST['role']);
$city = trim($_POST['city']);

mysql_query("INSERT INTO `leads` (`id`, `name`, `contact`, `enquiry_for`, `status`, `role`, `enquiry_from`, `email`, `initial_comment`, `time_stamp`, `city`) VALUES (NULL, '$name', '$contact', '$enquiry_for', '$status', '$role', '$enquiry_from', '$email', '$comment', CURRENT_TIMESTAMP, '$city');");

$last_id = mysql_insert_id();

header('location:display_message.php?title=Add Leads&message_subject=Last action of adding lead.&message=Successfully added lead to the database.<br><br><a href=add_history_lead_1.php?lead_id='.$last_id.'>You may add some update to this lead.</a>');

?>