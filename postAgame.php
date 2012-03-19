<html>
<body>
<?php include "template.php";
//session_start();
include "db_connect.php";
 ?>
<div id="right">
<h2>POST YOUR GAME</h2>

<form action="postAgame2.php" method="post">
<table>
<tr><td>Name:</td><td><input type="text" name="gameName"/></td></tr>
<br>
<tr><td>Creators:</td><td><input type="text" name="creators"/></td></tr>
<br>
<br>
<tr><td>Price:</td><td><input type="text" name="Price"/></td></tr>
<br>
<tr><td>Genre:</td><td>
<select name="genre"/>
<option>N/A</option>
<option>Platformer</option>
<option>SideScroller</option>
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


<tr><td>Year:</td><td><input type="text" name="yearMade"/></td></tr>
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


<tr><td>Manual/case included: </td><td>
<select name="manual">
<option>N/A</option>
<option>YES</option>
<option>NO</option>
</select></td></tr>

<br>
<tr><td>Condition:</td><td> 
<select name="cond"/>
<option>N/A</option>
<option>Mint</option>
<option>Good</option>
<option>Acceptable</option>
<option>Bad</option>
</select></td></tr>
<br>
	
<tr><td>Console: </td><td>
<select name="console">
<option>N/A</option>
<option>Super Nintendo Entertainment System</option>
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
</table>

<input type="submit" value="POST!" />
</form>

</div>
</body>
</html>
