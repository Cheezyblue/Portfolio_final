<?php 

    // First step to using SQL is to connect to the database
	// These variables will be used for connecting to the database
	$username = "root";
	$password = "root";
	$db = "portfolio_db";
	$host = "localhost";
	$port = 3306;


	// creates an mysqli object to connect to database
	$connection = new mysqli($host, $username, $password, $db, $port);

	// This will Validate our connection
	if($connection->connect_errno) {
		echo "Failed to connect to MySQL: " . $connection->connect_errno;
		die();
	}


?>