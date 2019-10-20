<?php

include 'connection.php';


$name = $_POST['name'];
$founded = $_POST['founded'];
$no_of_emloyees = $_POST['no_of_emloyees'];
$president = $_POST['president'];
$founder = $_POST['founder'];
$website = $_POST['website'];
$social_link = $_POST['social_link'];


if( !empty($name) || !empty($founded) || !empty($no_of_emloyees) ||!empty($president) || !empty($founder) || !empty($website) || !empty($social_link) ) {

	

		$SELECT = "SELECT name From character_detail Where name = ? Limit 1";
		$INSERT = "INSERT Into character_detail(name, founded, no_of_emloyees, president, founder, website, social_link ) values (?, ?, ?, ?, ?, ?, ? )";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$stmt->bind_result($name);
		$stmt->store_result();
		$rnum = $stmt->num_rows;


		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("siisiss", $name, $founded, $no_of_emloyees, $president, $founder, $website, $social_link);
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