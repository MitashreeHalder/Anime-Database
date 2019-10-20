<?php
$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];
$email = $_POST['email'];
$age = $_POST['age'];
$profession = $_POST['profession'];
$gender = $_POST['gender'];



if( !empty($user_name) || !empty($user_password) || !empty($email) ||!empty($age) || !empty($profession) || !empty($gender) ) {

	$host = "locahost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "anime_database";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if(mysqli_connect_error()){

		die('Connect Error(', mysqli_connect_error(). ')'. mysqli_connect_error());
	}else{

		$SELECT = "SELECT email From character_detail Where email = ? Limit 1";
		$INSERT = "INSERT Into character_detail(user_name, user_password, email, age, profession, gender ) values (?, ?, ?, ?, ?, ? )";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;


		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssiss", $user_name, $user_password, $email, $age, $profession, $gender );
			$stmt->execute();
			echo "New record inserted successfully";

		}else{
			echo "It's data is already inserted";
		}
		stmt->close;

	}


}else{
	echo "all field are required";
	die();
}



?>