<?php

	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_port = "";		
	$db_name = "pawii";
	
	$con = mysqli_connect($db_host,$db_user,$db_password);
	mysqli_select_db($con, $db_name);

?>