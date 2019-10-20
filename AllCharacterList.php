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

<h2>Character List</h2>

<table>
  <tr>
    <th>Name</th>
    <th>role</th>
    <th>profession</th>
    <th>weapon</th>
    <th>height</th>
    <th>weight</th>
    <th>birthyear</th>
    <th>special_traits</th>
    <th>social_link</th>
    <th>anime_name</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
  
  <?php
	$sql = "SELECT * FROM character_detail";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			
			?>
			<tr>
			<?php
			// output data of each row
			while($row = $result->fetch_assoc()) {
				?>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["role"]; ?></td>
					<td><?php echo $row["profession"]; ?></td>
					<td><?php echo $row["weapon"]; ?></td>
					<td><?php echo $row["height"]; ?></td>
					<td><?php echo $row["weight"]; ?></td>
					<td><?php echo $row["birthyear"]; ?></td>
					<td><?php echo $row["special_traits"]; ?></td>
					<td><?php echo $row["social_link"]; ?></td>
					<td><?php echo $row["anime_name"]; ?></td>
					<td><a href="deletecharacter.php?name=<?php echo $row["name"]; ?> ">Delete</a></td>
					<td><a href="updatecharacterdetails.php?name=<?php echo $row["name"]; ?> ">Edit</a></td>
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
