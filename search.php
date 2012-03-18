<html>
	<?php
		include "template.php";
		session_start();
		include "db_connect.php";
	?>
	<div id="right">
	<h2>Search</h2></br>

	<form action="searchController.php" method="post">
		Username: <input type="text" name="gamename"/>
		
		<input type="submit" value="Submit" />
	</form>

</div>
</html>
