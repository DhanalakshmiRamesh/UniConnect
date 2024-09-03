<?php 

// Server name must be localhost 
$servername = "localhost"; 

// In my case, user name will be root 
$username = "root"; 

// Password is empty 
$password = ""; 

// Creating a connection 
$conn = new mysqli($servername, 
			$username, $password); 

// Check connection 
if ($conn->connect_error) { 
	die("Connection failure: "
		. $conn->connect_error); 
} 

mysqli_select_db($conn,'users');

// Creating a database named geekdata 
$sql = "CREATE TABLE Problem_table (
    Name varchar(255),
    Email id varchar(255),
    Phone_Number varchar(255)
)"; 
if ($conn->query($sql) === TRUE) { 
	echo "Database with name users"; 
} else { 
	echo "Error: " . $conn->error; 
} 

// Closing connection 
$conn->close(); 
?> 
