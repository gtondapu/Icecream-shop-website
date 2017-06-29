<?php
	error_reporting(E_ALL);	
	$con =@mysqli_connect("153.91.152.245", "test", "test", "test")OR die ('Could not connect to MySQL: ' . mysqli_connect_error( ));
	mysqli_set_charset($con, 'utf8');
?>
