<?php
	$connection = mysqli_connect("localhost","root","");
	if(!$connection){
		die("database connection failed" . mysql_error());
	}
	
	// 2. select a database
	$db_select = mysqli_select_db($connection,"web store");
	if(!$db_select){
		die("database selection failed" . mysql_error());
	}
?>