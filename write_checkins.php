<?php

$con = mysql_connect('localhost', 'root', 'crimson');
mysql_select_db('hiddencottage');

$result = mysql_query("SELECT * from badges")

while ($row = mysql_fetch_array($result))
{
	echo $row['b_id']; 
}
?>