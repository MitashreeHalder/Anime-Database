<?php
	include 'connection.php';
	
	
	$name = $_POST['name'];
	$manga_adoption = $_POST['manga_adoption'];
	$status = $_POST['status'];
	$genre = $_POST['genre'];
	$no_of_episodes = $_POST['no_of_episodes'];
	$anime_duration = $_POST['anime_duration'];
	$studio = $_POST['studio'];
	$producer = $_POST['producer'];
	$release_date = $_POST['release_date'];
	$last_aired = $_POST['last_aired'];
	
	
		$sql = "UPDATE anime_details set manga_adoption='$manga_adoption', status='$status', genre='$genre', no_of_episodes='$no_of_episodes', anime_duration='$anime_duration', studio='$studio', producer='$producer', release_date='$release_date', last_aired='$last_aired' where name='$name'";
	

	if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully";
	} else {
    echo "Error deleting record: " . $conn->error;
	}

?>