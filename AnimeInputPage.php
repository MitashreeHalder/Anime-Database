<!DOCTYPE html>
<html>
<body>

<h2>Anime Details Input By ADMIN</h2>

<form action="insertanimedetails.php" method="POST">
  Name:<br>
  <input type="name" name="name">
  <br>
  Manga Adoption:<br>
  <input type="manga_adoption" name="manga_adoption">
  <br>
  status:<br>
<input type="radio" name="status" value="ongoing"> ongoing<br>
<input type="radio" name="status" value="completed"> completed<br>
<br>
  Genre:<br>
  <input type="genre" name="genre">
  <br>
  Number of Episodes:<br>
  <input type="no_of_episodes" name="no_of_episodes">
  <br>
  Anime Duration:<br>
  <input type="anime_duration" name="anime_duration"> hours
  <br>
  Studio:<br>
  <input type="studio" name="studio">
  <br>
  Producer:<br>
  <input type="producer" name="producer">
  <br>
  Release Date:<br>
  <input type="release_date" name="release_date"> dd-mm-yyyy
  <br>
  Last Aired:<br>
  <input type="last_aired" name="last_aired"> dd-mm-yyyy
  <br>
  
  
  <br>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">

</form>


</body>
</html>
