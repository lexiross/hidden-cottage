<html>
<?php

$con = mysql_connect('localhost', 'root', 'crimson');
mysql_select_db('hiddencottage');


if ($_GET['userid'])
{
	$userid=$_GET['userid']; 
	$useeid=$_GET['useeid']; 
	$pts=$_GET['pts']; 

	$result = mysql_query("INSERT INTO checkins VALUES (0,$userid, $useeid, NOW(), $pts)");
	echo "checked-in!"
}
else
{
	?>
	<img src="http://i.imgur.com/Mi3Mz.jpg">
	<?php	
}

?>
</html>