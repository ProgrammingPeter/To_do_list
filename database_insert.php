<?php 


$servername = "localhost";
$username = "root";
$password = "root";
$database = "To_do";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


//	$text = $_GET['text'];
//	$task_desc = $_GET['task_desc'];
	
	$sql = "INSERT INTO Post (Title, Text_desc)
	VALUES ('test', 'test')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;


?>