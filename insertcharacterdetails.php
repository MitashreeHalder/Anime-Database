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

if( !empty($name) || !empty($role) || !empty($profession) ||!empty($weapon) || !empty($height) || !empty($weight) || !empty($birthyear) || !empty($special_traits) || !empty($social_link) || !empty($anime_name) ) {

		$SELECT = "SELECT name From character_detail Where name = ? Limit 1";
		$INSERT = "INSERT Into character_detail(name, role, profession, height, weight, birthyear, special_traits, social_link, anime_name) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$stmt->bind_result($name);
		$stmt->store_result();
		$rnum = $stmt->num_rows;


		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssiiisss", $name, $role, $profession, $weapon, $height, $weight, $birthyear, $special_traits, $social_link, $anime_name);
			$stmt->execute();
			echo "New record inserted successfully";

		}else{
			echo "It's data is already inserted";
		}


}else{
	echo "all field are required";
	die();
}



?>