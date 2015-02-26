<?php 
	
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "To_do";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//	$text = $_GET['text'];
//	$task_desc = $_GET['task_desc'];

$sql = "INSERT INTO Post (Title, Text_desc, Priority, Date)
VALUES ('New York Knicks', 'Testing', 'NULL', 'NULL')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>