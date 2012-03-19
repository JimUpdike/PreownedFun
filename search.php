<html>
	<?php
		include "template.php";
		session_start();
		include "db_connect.php";
	?>
	<div id="right">
	
	Please fill in at least one of the fields below,<br/>
	or just press "Submit!" to browse all listings!<br/><br/>
	Search by...<br/>
	<form action="result.php" method="get">

<table>
<tr><td>Game:</td><td><input type="text" name="game"/></td></tr>
<br>
<tr><td>Max price: $</td><td><input type="text" name="price"/></td></tr>
<br>
<tr><td>Genre:</td><td>
<select name="genre"/>
<option></option>
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
<br>

<tr><td>Rating:</td><td>
<select name="rating">
<option></option>
<option>Early Childhood (EC)</option>
<option>Everyone (E)</option>
<option>Everyone 10+ (E10+)</option>
<option>Teen (T)</option>
<option>Mature (M)</option>
<option>Adults Only (AO)</option>
<option>Rating Pending</option>
</select></td></tr>
<br>

<br>
<tr><td>Condition:</td><td> 
<select name="cond"/>
<option></option>
<option>Mint Condition</option>
<option>Good</option>
<option>Acceptable</option>
<option>Bad</option>
</select></td></tr>
<br>
	
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
</select></td></tr>

<!--- <tr><td>Seller:</td><td><input type="text" name="seller"/></td></tr> ---->
</table>

<input type="submit" value="Submit!" />

	</form>
	<br/>

</div>
</html>
