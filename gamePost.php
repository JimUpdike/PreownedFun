<html>
<body>
<?php
  include('template.php');
  include "db_connect.php";
?>
<div id="right">
<table>
<tr><th>Name</th><th>Creator</th><th>Genre</th><th>Year</th><th>Manual</th><th>Condition</th><th>Counsole</th>
<th>Seller Name</th><th>Seller Rating</th></tr>
<?php


  if(isSet($_GET['id'])) {
	$game_id = $_GET['id'];
	$query = "Select currentPostings.*,userRep.username,userRep.rating From currentPostings INNER JOIN userRep ON currentPostings.seller_id=userRep.id 
			WHERE currentPostings.post_id = $game_id";
	$result = mysqli_query($db,$query) or die("Error Querying Database");
	
	if($row = mysqli_fetch_array($result)){
		$nme = $row['gameName'];
		$mkr = $row['creators'];
		$gen = $row['genre'];
		$yr = $row['yearMade'];
		$manul = $row['manual'];
		$cond = $row['cond'];
		$console = $row['platform'];
		$user = $row['username'];
		$sellerRating = $row['rating'];
		
		echo "<tr><td>$nme</td><td>$mkr</td><td>$gen</td><td>$yr</td><td>$manul</td><td>$cond</td><td>$console</td><td>$user</td><td>$sellerRating</td></tr> ";
 
  }
  }
 ?>
</table>
</div>

</body>
</html>