<?php
	include 'connection.php';
	
	$name = $_POST['name'];
	$role = $_POST['role'];
	$profession = $_POST['profession'];
	$weapon = $_POST['weapon'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$birthyear = $_POST['birthyear'];
	$special_traits = $_POST['special_traits'];
	$social_link = $_POST['social_link'];
	$anime_name = $_POST['anime_name'];
	
	$sql = "UPDATE character_detail set role='$role', profession='$profession', weapon='$weapon', height='$height', weight='$weight', birthyear='$birthyear', special_traits='$special_traits', social_link='$social_link', anime_name='$anime_name' where name='$name'";
	

	if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully";
	} else {
    echo "Error deleting record: " . $conn->error;
	}

?>