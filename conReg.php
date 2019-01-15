<?php

$db_username = 'root';
$db_password = '';
$db_name = 'dba';
$db_host = 'localhost';
$mysqli = mysqli_connect($db_host, $db_username, $db_password,$db_name);


if (!$mysqli)
 {


	die("could not connect".mysql_error());
	# code...
}
else
{
	echo " connection success";
}

?>