
	<?php
$id = $_POST['id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contaus";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM estudos WHERE idestudos=".$id."";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>


