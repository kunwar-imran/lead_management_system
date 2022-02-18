<?php
require_once ('db.php');
require_once ('functions.php');

		$one = mysql_query ("select * from leads where contact like '%-%' order by id desc");
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

//var_dump($data);
$i=0;
foreach ($data as $data_val){
$i++;
$contact = ltrim($data_val['contact'], '0');
$id = $data_val[id];
echo $i.". $id. ".$contact;
//mysql_query("UPDATE `leads` SET `contact` = '$contact' WHERE `leads`.`id` = $id;");
echo "<br>";
}
echo "done";
?>