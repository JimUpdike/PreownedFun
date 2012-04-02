<html>
<body>
<?php
session_start();
 include "template.php";
include "db_connect.php";
 ?>
<div id="right">
<h2>POST YOUR GAME</h2>
<br/>

<form action="postAgame2.php" method="post">
<table>
<tr><td>Name:</td><td><input type="text" name="gameName"/></td></tr>
<tr><td>Creators:</td><td><input type="text" name="creators"/></td></tr>
<tr><td>Your Asking Price: $</td><td><input type="text" name="Price"/></td></tr>
<tr><td>Genre:</td><td>
<select name="genre"/>
<option>N/A</option>
<option>Platformer</option>
<option>Side-Scroller</option>
<option>First-Person Shooter (FPS)</option>
<option>Third-Person Shooter</option>
<option>Adventure</option>
<option>Role-Playing Game (RPG)</option>
<option>Puzzle</option>
<option>Simulation</option>
<option>Real-Time Strategy (RTS)</option>
<option>Sports</option>
<option>Fighting</option>
<option>Dance/Rhythm</option>
<option>Survival Horror</option>
<option>Other</option>
</select></td></tr>

<tr><td>Year:</td><td><input type="text" name="yearMade"/></td></tr>

<tr><td>ESRB Rating:</td><td>
<select name="rating">
<option>N/A</option>
<option>Early Childhood (EC)</option>
<option>Everyone (E)</option>
<option>Everyone 10+ (E10+)</option>
<option>Teen (T)</option>
<option>Mature (M)</option>
<option>Adults Only (AO)</option>
<option>Rating Pending</option>
</select></td></tr>

<tr><td>Manual Included: </td><td>
<select name="manual">
<option>N/A</option>
<option>YES</option>
<option>NO</option>
</select></td></tr>

<tr><td>Condition:</td><td> 
<select name="cond"/>
<option>N/A</option>
<option>Mint</option>
<option> Great </option>
<option>Good</option>
<option>Acceptable</option>
<option> Fair </option>
<option>Bad</option>
</select></td></tr>
	
<tr><td>Console: </td><td>
<select name="console">
<option></option>
<option>Nintendo Entertainment System (NES)</option>
<option>Super Nintendo Entertainment System (SNES)</option>
<option>Sega Saturn</option>
<option>Dreamcast</option>
<option>Nintendo 64</option>
<option>GameCube</option>
<option>Gameboy Advance</option>
<option>Nintendo Wii</option>
<option>Nintendo DS</option>
<option>Playstation 3</option>
<option>Playstation 2</option>
<option>Playstation 1</option>
<option>Xbox 360</option>
<option>Xbox</option>
<option>Computer</option>
</select></td></tr>
</table>

<input type="submit" value="POST!" />
</form>

</div>
</body>
</html>
