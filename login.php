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

	$sql = 'SELECT email, password FROM userInfo WHERE email="'.$_REQUEST["username"].'"';

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if (strcmp($row["email"], "") == 0){
				echo -1;
				exit();
			}
	    	if (strcmp($row["email"], $_REQUEST["username"]) == 0){
	    		if(strcmp($row["password"], $_REQUEST["password"]) == 0){
	    			echo 1;
	    		}
	    		else{
	    			echo 0;
	    		}
	    		exit();
	    	}
	    }
	}
    
    echo 0;
	$conn->close();
?>