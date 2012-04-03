<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
session_start();
include "template.php"; ?>

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
	<tr><th>Username</th><th>Email</th><th>Rating</th><tr>
	<?php
	include('db_connect.php');
	$query = "SELECT * FROM users ORDER BY username";
	$result = mysqli_query($db, $query) or die("Error Querying Database");
	$i = 0;	
	while($row = mysqli_fetch_array($result)){	
		$username = $row['username'];
		$rating = $row['rating'];
		if ($rating == -1.00){
			$rating = 'This user has not been rated.';
		}
		$email = $row['email'];
		if ($i % 2 == 0){
			$td = "<td class=off>";
		}
		else {
			$td = "<td>";
		}
		echo"<tr>$td <a href='profile.php?username=$username'>$username<a></td> $td $email </td> $td $rating </td></tr>"; 
		$i++;
	}
			
	mysqli_close($db);
	?>
	</table>


</html>
</div>
</html>
