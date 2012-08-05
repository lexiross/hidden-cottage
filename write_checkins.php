<?php

$con = mysql_connect('localhost', 'root', 'crimson');
mysql_select_db('hiddencottage');

$userid=0; 
$useeid=0; 
$pts=0; 

$result = mysql_query("INSERT INTO checkins VALUES (0,$userid, $useeid, NOW(), $pts)");

?>