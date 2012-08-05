<?php

$con = mysql_connect('localhost', 'root', 'crimson');
mysql_select_db('hiddencottage');

$userid=$_GET['userid']; 
$useeid=$_GET['useeid']; 
$pts=$_GET['pts']; 


$result = mysql_query("INSERT INTO checkins VALUES (0,$userid, $useeid, NOW(), $pts)");

echo "checked-in!"

?>