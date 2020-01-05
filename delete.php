<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "1027";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
	

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = 'DELETE FROM userInfo WHERE name="'.$_REQUEST["username"].'"';

	$result = $conn->query($sql);
    echo 0;
	$conn->close();
?>