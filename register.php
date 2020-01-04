<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "1028";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
	

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = 'INSERT INTO userInfo(email, password) VALUES ("'.$_REQUEST["email"].'","'.$_REQUEST["password"].'")';

	$result = $conn->query($sql);
    echo 0;
	$conn->close();
?>