<?php
class leads{
function lead_status_name(){
	$i=0;
		$one = mysql_query ("select * from lead_status");
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];
		$data[$i]['status'] = $two['status'];
		$i++;		 
		}
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}

function product_name(){
	$i=0;
		$one = mysql_query ("select * from product");
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];
		$data[$i]['name'] = $two['name'];
		$data[$i]['mrp'] = $two['mrp'];
		$data[$i]['mop'] = $two['mop'];
		$i++;		 
		}
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}

function leads_all(){
	$i=0;
		$one = mysql_query ("select * from leads order by id desc");
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];
		$data[$i]['status'] = $two['status'];
		$data[$i]['name'] = $two['name'];
		$data[$i]['contact'] = $two['contact'];
		$data[$i]['enquiry_for'] = $two['enquiry_for'];
		$data[$i]['role'] = $two['role'];
		$data[$i]['enquiry_from'] = $two['enquiry_from'];
		$data[$i]['email'] = $two['email'];
		$data[$i]['initial_comment'] = $two['initial_comment'];
		$data[$i]['time_stamp'] = $two['time_stamp'];	
		$data[$i]['city'] = $two['city'];		
		$i++;		 
		}
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}

function lead_by_id($id){
		$one = mysql_query ("select * from leads where `id` = '$id'");
		while ($two = mysql_fetch_array ($one)){
		$data['id'] = $two['id'];
		$data['status'] = $two['status'];
		$data['name'] = $two['name'];
		$data['contact'] = $two['contact'];
		$data['enquiry_for'] = $two['enquiry_for'];
		$data['role'] = $two['role'];
		$data['enquiry_from'] = $two['enquiry_from'];
		$data['email'] = $two['email'];
		$data['initial_comment'] = $two['initial_comment'];
		$data['time_stamp'] = $two['time_stamp'];	
		$data['city'] = $two['city'];					 
		}
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}

function lead_history($lead_id){
		$i=0;
		$one = mysql_query ("select * from lead_history where `lead_id` = '$lead_id' order by `id` desc");
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];
		$data[$i]['status'] = $two['status'];
		$data[$i]['st_comment'] = $two['st_comment'];
		$data[$i]['schedule_call'] = $two['schedule_call'];
		$data[$i]['sc_comment'] = $two['sc_comment'];
		$data[$i]['time_stamp'] = $two['time_stamp'];
		$data[$i]['response_id'] = $two['response_id'];
		$data[$i]['lead_id'] = $two['lead_id'];
		//$data[$i][''] = $two[''];
		$i++;		 
		}
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}

function lead_schedule($date_today, $data_required){
		$i=0;
		if($data_required == "historic") $query = "select * from lead_history where `schedule_call` < '$date_today' AND `schedule_call` <> '0000-00-00' AND `response_id` = 0  order by `schedule_call` DESC ";
		if($data_required == "today") $query = "select * from lead_history where `schedule_call` = '$date_today' AND `response_id` = 0 Order by `id` DESC ";
		if($data_required == "future") $query = "select * from lead_history where `schedule_call` > '$date_today' AND `response_id` = 0 order by `schedule_call` ASC ";
		 
		$one = mysql_query ($query);
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];
		$data[$i]['status'] = $two['status'];
		$data[$i]['st_comment'] = $two['st_comment'];
		$data[$i]['schedule_call'] = $two['schedule_call'];
		$data[$i]['sc_comment'] = $two['sc_comment'];
		$data[$i]['time_stamp'] = $two['time_stamp'];
		$data[$i]['response_id'] = $two['response_id'];
		$data[$i]['lead_id'] = $two['lead_id'];
		$i++;		 
		}
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}

function lead_status_final($lead_id){
		 
		$one = mysql_query ("select * from lead_history where `lead_id` = '$lead_id' AND `status` <> '' order by `id` desc Limit 1");
		while ($two = mysql_fetch_array ($one)){
		$data['id'] = $two['id'];
		$data['status'] = $two['status'];
		$data['st_comment'] = $two['st_comment'];
		$data['schedule_call'] = $two['schedule_call'];
		$data['sc_comment'] = $two['sc_comment'];
		$data['time_stamp'] = $two['time_stamp'];
		//$data[$i][''] = $two[''];
		 		 
		}
	if (!isset ($data)){
	 $data = $this->lead_by_id($lead_id);
	}
	return $data;
}

function indian_time($time_stamp){
$data['date'] = date("d-M-Y", strtotime('+330 minutes', strtotime($time_stamp)));
$data['time'] = date("h:i:s A", strtotime('+330 minutes', strtotime($time_stamp)));

$data['time_stamp'] = date("Y-m-d H:i:s", strtotime('+330 minutes', strtotime($time_stamp)));
$data['date_sql'] = date("Y-m-d", strtotime('+330 minutes', strtotime($time_stamp)));
$data['time_sql'] = date("H:i:s", strtotime('+330 minutes', strtotime($time_stamp)));


return $data;
}

function search_lead($name, $contact, $enquiry_for, $status, $enquiry_from, $email, $role, $city){
	$i=0;
		$one = mysql_query ("select * from leads where `name` like '%$name%' AND `contact` like '%$contact%' AND `enquiry_for` like '%$enquiry_for%' AND `status` like '%$status%' AND `enquiry_from` like '%$enquiry_from%' AND `email` like '%$email%' AND `role` like '%$role%' AND `city` like '%$city%'  order by id desc");
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];
		$data[$i]['status'] = $two['status'];
		$data[$i]['name'] = $two['name'];
		$data[$i]['contact'] = $two['contact'];
		$data[$i]['enquiry_for'] = $two['enquiry_for'];
		$data[$i]['role'] = $two['role'];
		$data[$i]['enquiry_from'] = $two['enquiry_from'];
		$data[$i]['email'] = $two['email'];
		$data[$i]['initial_comment'] = $two['initial_comment'];
		$data[$i]['time_stamp'] = $two['time_stamp'];	
		$data[$i]['city'] = $two['city'];		
		$i++;		 
		}
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;	
}

function wa_templates_all(){
		$i=0;
		$one = mysql_query ("select * from wa_templates;");
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];
		$data[$i]['prefix'] = $two['prefix'];
		$data[$i]['content'] = $two['content'];
		$data[$i]['suffix'] = $two['suffix'];
		//$data[$i][''] = $two[''];
		$i++;		 
		}
	
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}



function wa_approach_all(){
		$i=0;
		$one = mysql_query ("SELECT * FROM `wa_approach`  order by `id` desc;");
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];
		$data[$i]['contact'] = $two['contact'];
		$data[$i]['name'] = $two['name'];
		$data[$i]['wa_template_id'] = $two['wa_template_id'];
		$data[$i]['time_stamp'] = $two['time_stamp'];
		$data[$i]['lead_id'] = "NULL";
		$lead_data = $this->search_lead('', $two['contact'], '', '', '', '', '', '');
		if($lead_data != "NULL") $data[$i]['lead_id'] = $lead_data[0]['id'];
		$i++;		 
		}
	
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}

function wa_contact_us_all(){
		$i=0;
		$one = mysql_query ("SELECT * FROM `contact_us`  order by `id` desc;");
		while ($two = mysql_fetch_array ($one)){
		$data[$i]['id'] = $two['id'];		
		$data[$i]['name'] = $two['name'];
		$data[$i]['email'] = $two['email'];
		$data[$i]['subject'] = $two['subject'];
		$data[$i]['message'] = $two['message'];
		$data[$i]['time_stamp'] = $two['time_stamp'];
		$data[$i]['ip_address'] = $two['ip_address'];
		$data[$i]['contact'] = $two['contact'];
		$data[$i]['lead_id'] = "NULL";
		$lead_data = $this->search_lead('', $two['contact'], '', '', '', '', '', '');
		if($lead_data != "NULL") $data[$i]['lead_id'] = $lead_data[0]['id'];
		$i++;		 
		}	
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}

function wa_template($id){
		
		$one = mysql_query ("select * from wa_templates where `id` = '$id' limit 1;");
		while ($two = mysql_fetch_array ($one)){
		$data['id'] = $two['id'];
		$data['prefix'] = $two['prefix'];
		$data['content'] = $two['content'];
		$data['suffix'] = $two['suffix'];
		//$data[$i][''] = $two[''];				 
		}
	
	if (!isset ($data)){
	$data = "NULL";
	}
	return $data;
}



function makeBoldText($orimessage) {
   $styles = array ( '*' => 'strong', '_' => 'i', '~' => 'strike');
  $orimessage = nl2br($orimessage);
   return preg_replace_callback('/(?<!\w)([*~_])(.+?)\1(?!\w)/',
      function($m) use($styles) { 
         return '<'. $styles[$m[1]]. '>'. $m[2]. '</'. $styles[$m[1]]. '>';
      },
      $orimessage);
}
	
}


?>