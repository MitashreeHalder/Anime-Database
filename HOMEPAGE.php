<!DOCTYPE html>
<html>
<head>
<title>ANIME DATABASE</title>
</head>
<body>

<h1>Anime Database</h1>
<br>
<br>

<b>Search Filter:</b>
<form>
	<a href="AllAnimeList.php">  <h1>SEE ALL ANIME LIST</h1></a>
</form>
<br>
<b>Search Filter:</b>
<form action="animesearchlist.php" method="GET">
	<button type="submit"><b>SEARCH by Name</b></button>
	<input type="hidden" value="name" name="v"/>
	<input type="text" name="s">
</form>
<form action="animesearchlist.php" method="GET">
	<button type="submit"><b>SEARCH by Character</b></button>
	<input type="hidden" value="name" name="v"/>
	<input type="text" name="s">
</form>
<form action="animesearchlist.php" method="GET">
	<button type="submit"><b>SEARCH by Studio</b></button>
	<input type="hidden" value="studio" name="v"/>
	<input type="text" name="s">
</form>


<form action="animesearchlist.php" method="GET">
	<button type="submit"><b>SEARCH by Genre</b></button>
	<input type="hidden" value="genre" name="v"/>
	<input type="text" name="s">
</form>

<br>
<br>
<h2>User login</h2>

<form action="">
User name:<br>
<input type="text" name="userid">
<br>
User password:<br>
<input type="password" name="psw">
<br>
  <input type="submit" value="Submit">
</form>

<br>
<a href="UserLoginPage.php"><h4><b>Sign UP</b></h4></a>
<br>
<form>
	<button type="button"><b>SEARCH User</b></button>
	<input type="text" name="search">
</form>


<h2>ADMIN login</h2>

<form action="welcomeAdminPage.php">
Admin name:<br>
<input type="text" name="id">
<br>
Admin password:<br>
<input type="password" name="psw">
<br>
  <input type="submit" value="Submit">
</form>
</body>
</html> 