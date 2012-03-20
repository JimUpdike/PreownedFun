<html>
<body>
<?php
  include('template.php');
  include "db_connect.php";
?>
<div id="right">
<?php


  if(isSet($_GET['id'])) {
	$game_id = $_GET['id'];
	$query = "Select * From currentPostings INNER JOIN userRep ON currentPostings.seller_id=userRep.id 
			WHERE currentPostings.post_id = $game_id";
	$result = mysqli_query($db,$query) or die("Error Querying Database");
	
	if($row = mysqli_fetch_array($result)){
		echo "Are you sure you want to delete this post?<br><br>";
		echo "Game name: ".$row['gameName']."<br>";
		echo "Quality: ".$row['cond']."<br>";
		echo "Price: ".$row['price']."<br>";
		echo '<a href="deleteController.php?id='.$game_id.'">Delete<a>';
  }
  }
 ?>
</table>
</div>

</body>
</html>