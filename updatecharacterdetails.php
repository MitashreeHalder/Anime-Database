<?php
	include 'connection.php';
	
	$n = $_GET['name'];
	
	$sql = "SELECT * FROM character_detail where name='$n'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$name = $row["name"];
			

?>

<!DOCTYPE html>
<html>
<body>

<h2>Character Details Input by ADMIN</h2>
<form action="characterUpdate.php" method="POST">
  Name:<br>
  <input type="name" name="name" value="<?php echo $row["name"]; ?>">
  <br>
  Role:<br>
  <input type="role" name="role" value="<?php echo $row["role"]; ?>">
  <br>
  Profession:<br>
  <input type="profession" name="profession" value="<?php echo $row["profession"]; ?>">
  <br>
  Primay Weapon:<br>
  <input type="weapon" name="weapon" value="<?php echo $row["weapon"]; ?>">
  <br>
  Height:<br>
  <input type="height" name="height" value="<?php echo $row["height"]; ?>"> inch.
  <br>
  Weight:<br>
  <input type="weight" name="weight" value="<?php echo $row["weight"]; ?>"> lbs.
  <br>
  
  Birthyear:<br>
  <input type="birthyear" name="birthyear" value="<?php echo $row["birthyear"]; ?>"> yyyy
  <br>
  Special Traits:<br>
  <input type="special_traits" name="special_traits" value="<?php echo $row["special_traits"]; ?>">
  <br>
  Social Link:<br>
  <input type="social_link" name="social_link" value="<?php echo $row["social_link"]; ?>">
  <br>
  Anime name:<br>
  <input type="anime_name" name="anime_name" value="<?php echo $row["anime_name"]; ?>">
  <br>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">


</form>
  <?php
	}
		}
  ?>


</body>
</html>
