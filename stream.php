<?php

$con = mysql_connect('localhost', 'root', 'crimson');
mysql_select_db('hiddencottage');

$userid=$_GET['userid']; 
$result = mysql_query("SELECT * from checkins where user_fb_id='$userid' order by timestamp DESC");

$array = array(); 

while ($row = mysql_fetch_array($result))
{
	$userid=$row['user_fb_id'];
	$useeid=$row['usee_fb_id'];
	$timestamp=$row['timestamp'];
	$pts=$row['pts'];

	$arrayrow = array('
		"userid" => '$userid',
		"useeid" => '$useeid',
		"timestamp" => '$timestamp',
		"pts" => '$pts',
		');

	$array[] = $arrayrow;

}

echo json_encode($array);
?>