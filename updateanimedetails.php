<?php
	include 'connection.php';
	
	$n = $_GET['name'];
	
	$sql = "SELECT * FROM anime_details where name='$n'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$name = $row["name"];
			

?>

<!DOCTYPE html>
<html>
<body>

<h2>Anime Details Input By ADMIN</h2>

<form action="updateanime.php" method="POST">
  Name:<br>
  <input type="name" name="name" value="<?php echo $name ?>">
  <br>
  Manga Adoption:<br>
  <input type="manga_adoption" name="manga_adoption" value="<?php echo $row["manga_adoption"]; ?>" >
  <br>
  status:<br>
<input type="radio" name="status" value="ongoing"> ongoing<br>
<input type="radio" name="status" value="completed"> completed<br>
<br>
  Genre:<br>
  <input type="genre" name="genre" value="<?php echo $row["genre"]; ?>">
  <br>
  Number of Episodes:<br>
  <input type="no_of_episodes" name="no_of_episodes" value="<?php echo $row["no_of_episodes"]; ?>">
  <br>
  Anime Duration:<br>
  <input type="anime_duration" name="anime_duration" value="<?php echo $row["anime_duration"]; ?>"> hours
  <br>
  Studio:<br>
  <input type="studio" name="studio" value="<?php echo $row["studio"]; ?>">
  <br>
  Producer:<br>
  <input type="producer" name="producer" value="<?php echo $row["producer"]; ?>">
  <br>
  Release Date:<br>
  <input type="release_date" name="release_date" value="<?php echo $row["release_date"]; ?>"> dd-mm-yyyy
  <br>
  Last Aired:<br>
  <input type="last_aired" name="last_aired" value="<?php echo $row["last_aired"]; ?>"> dd-mm-yyyy
  <br>
  
  <br>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
  
  <?php
	}
		}
  ?>

</form>


</body>
</html>
