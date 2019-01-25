<?php

	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "yashwanth95");
	define("DB_NAME", "complaint_mgmt");
	
	// 1. Create a database connection
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	
	// Test if connection faoled or not
	if(mysqli_connect_errno()) {
		// above function returns an error number if error occurs
		
		// exit leaving the message
		die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}

?>
















