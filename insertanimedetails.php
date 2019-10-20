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

if( !empty($name) || !empty($manga_adoption) || !empty($status) || !empty($genre) || !empty($no_of_episodes) || !empty($anime_duration) || !empty($studio) || !empty($producer) || !empty($release_date) || !empty($last_aired)) {
	
		$SELECT = "SELECT name From anime_details Where name = ? Limit 1";
		$INSERT = "INSERT Into anime_details (name, manga_adoption, status, genre, no_of_episodes, anime_duration, studio, producer, release_date, last_aired) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$stmt->bind_result($name);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssiissss", $name, $manga_adoption, $status, $genre, $no_of_episodes, $anime_duration, $studio, $producer, $release_date, $last_aired);
			$stmt->execute();
			echo "New record inserted successfully";

		}else{
			echo "It's data is already inserted";
		}

}else{
	echo "All field are required";
	die;
}

?>