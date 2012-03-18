<html>
	<?php
		include "template.php";
		session_start();
		include "db_connect.php";
	?>
	<div id="right">
	
	Please fill in at least one of the fields below.<br/><br/>
	Search by...<br/>
	<form action="searchController.php" method="post">

<table>
<tr><td>Game:</td><td><input type="text" name="gameName"/></td></tr>
<br>
<tr><td>Max price:</td><td><input type="text" name="Price"/></td></tr>
<br>
<tr><td>Genre:</td><td>
<select name="genre"/>
<option>N/A</option>
<option>Shooter</option>
<option>First-Person-Shooter (or FPS)</option>
<option>Adventure</option>
<option>Platform</option>
<option>Role-Playing Games (RPGs)</option>
<option>Puzzle</option>
<option>Simulations</option>
<option>Strategy/Tactics</option>
<option>Sports</option>
<option>Fighting</option>
<option>Dance/Rhythm</option>
<option>Survival Horror</option>
<option>Hybrids</option>
</select></td></tr>
<br>

<tr><td>Rating:</td><td>
<select name="rating">
<option>N/A</option>
<option>Early Childhood(EC)</option>
<option>Everyone(E)</option>
<option>EVERYONE 10+ (E10+)</option>
<option>Teen (T)</option>
<option>Mature (M)</option>
<option>Adults Only (AO)</option>
<option>Rating Pending</option>
</select></td></tr>
<br>

<br>
<tr><td>Condition:</td><td> 
<select name="cond"/>
<option>N/A</option>
<option>Mint Condition</option>
<option>Good</option>
<option>Acceptable</option>
<option>Bad</option>
</select></td></tr>
<br>
	
<tr><td>Console: </td><td>
<select name="console">
<option>N/A</option>
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
</select></td></tr>

<tr><td>Seller:</td><td><input type="text" name="seller"/></td></tr>
</table>

<input type="submit" value="Submit!" />

	</form>
	<br/>

</div>
</html>
