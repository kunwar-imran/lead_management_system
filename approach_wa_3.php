<?php
require_once('db.php');
require_once('functions.php');


$name = trim($_GET['name']);
$contact = trim($_GET['contact']);
$id = trim($_GET['wa_template']);
$lead_class = new leads;

$wa_template = $lead_class->wa_template($id);

$phone_no_pass =$contact;

$cust_phone_old = preg_replace('/\s+/', '', $phone_no_pass); // remove space from phone no if any.			

if (strlen ($cust_phone_old)>=10) $phone_no = "91".substr($cust_phone_old, -10);
else {
$phone_no ="91".$cust_phone_old;
}

$message_string = $wa_template['prefix']." ".$name."
".$wa_template['content']."
".$wa_template['suffix'];

mysql_query("INSERT INTO `wa_approach` (`id`, `name`, `contact`, `wa_template_id`, `time_stamp`) VALUES (NULL, '$name', '$contact', '$id', CURRENT_TIMESTAMP);");

$message_string = rawurlencode($message_string);

$wa_url = "https://api.whatsapp.com/send?phone=$phone_no&text=$message_string&source=&data=";
//echo $wa_url;
header("location:".$wa_url);
?>