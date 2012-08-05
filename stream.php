<?php

$con = mysql_connect('localhost', 'root', 'crimson');
mysql_select_db('hiddencottage');

$userid=$_GET['userid']; 
$result = mysql_query("SELECT * from checkins where fb_user_id='$userid' order by timestamp DESC");

echo "<table>";

while ($row = mysql_fetch_array($result))
{
	$userid=$row['user_fb_id'];
	$useeid=$row['usee_fb_id'];
	$timestamp=$row['timestamp'];
	$pts=$row['pts'];
	echo "<tr><td>$userid</td><td>$useeid</td><td>$timestamp</td><td>$pts</td>";
}
echo "</table>";
?>