<?php
	include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Anime List</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Manga adoption</th>
    <th>Status</th>
    <th>Genre</th>
    <th>No of episodes</th>
    <th>Anime Duration</th>
    <th>Studio</th>
    <th>Producer</th>
    <th>Release Date</th>
    <th>Last aired</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
  
  <?php
	$sql = "SELECT * FROM anime_details";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			
			?>
			<tr>
			<?php
			// output data of each row
			while($row = $result->fetch_assoc()) {
				?>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["manga_adoption"]; ?></td>
					<td><?php echo $row["status"]; ?></td>
					<td><?php echo $row["genre"]; ?></td>
					<td><?php echo $row["no_of_episodes"]; ?></td>
					<td><?php echo $row["anime_duration"]; ?></td>
					<td><?php echo $row["studio"]; ?></td>
					<td><?php echo $row["producer"]; ?></td>
					<td><?php echo $row["release_date"]; ?></td>
					<td><?php echo $row["last_aired"]; ?></td>
					<td><a href="deleteanime.php?name=<?php echo $row["name"]; ?> ">Delete</a></td>
					<td><a href="updateanimedetails.php?name=<?php echo $row["name"]; ?> ">Edit</a></td>
				<?php
			}
			
			?>
			</tr>
			<?php
		}
  ?>
</table>

</body>
</html>
