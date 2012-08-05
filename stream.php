<?php

$con = mysql_connect('localhost', 'root', 'crimson');
mysql_select_db('hiddencottage');

$userid=0; 
$result = mysql_query("SELECT * from checkins where fb_user_id='$userid' order by timestamp DESC");

while ($row = mysql_fetch_array($result))
{
	echo $row['c_id']; 
}
echo "hi";
?>