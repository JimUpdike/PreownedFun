<html xmlns="http://www.w3.org/1999/xhtml">


<?php include "template.php"; ?>

<div id="left">
<i><b><u>Users index</u></b></i>
<table class="displayTable">
<ul class=browseUL>
	
		</ul>
</table>

</div>
<div id="right">
<h2>User Index<h2></br>
	<table class="displayTable">
	<tr><th>Username</th><th>Profile Page(NYI)</th><th>Current Listings(NYI)</th></tr>
	<?php
	include('db_connect.php');
	$query = "SELECT username FROM userRep ORDER BY username";
	$result = mysqli_query($db, $query) or die("Error Querying Database");
	while($row = mysqli_fetch_array($result)) {
		$username = $row['username'];
		echo "<tr><td>$username</td><td>link</td><td>links</td></tr>\n";
	}
					
	mysqli_close($db);
	?>
	</table>


</html>
</div>
</html>