<?php
require_once('db.php');
$status = trim($_POST['status']);
$st_comment = trim($_POST['st_comment']);
$schedule = trim($_POST['schedule_call']);
$sc_comment = trim($_POST['sc_comment']);
$lead_id = trim($_POST['lead_id']);





mysql_query("INSERT INTO `lead_history` (`id`, `lead_id`, `status`, `st_comment`, `schedule_call`, `sc_comment`, `time_stamp`) VALUES (NULL, '$lead_id', '$status', '$st_comment', '$schedule', '$sc_comment', CURRENT_TIMESTAMP)");

$last_id = mysql_insert_id();
if(isset($_POST['response_id'])) {
				
$response_id = $_POST['response_id'];

mysql_query("UPDATE `lead_history` SET `response_id` = '$last_id' WHERE `lead_history`.`id` = '$response_id';");

}




header('location:display_lead.php?lead_id='.$lead_id);

?>