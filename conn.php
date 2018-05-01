<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'smartwb');

if(!$conn)
	{
		die("database connection failed" . mysql_error($conn));
	}

$select_bd = mysql_select_db($conn, 'smartwb');
if(!$select_bd)
	{
		die("database selection failed" . mysql_error($conn));
	}

?>