<?php
	include 'connection.php';
	
	$name = $_GET['name'];
	
	$sql = "DELETE FROM character_detail WHERE name='$name'";

	if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	} else {
    echo "Error deleting record: " . $conn->error;
	}

?>