<html>
<body>
<?php
 session_start();
  include('template.php');
  include "db_connect.php";
?>
<div id="right">
<?php


  if(isSet($_GET['id'])) {
	$game_id = $_GET['id'];


	$query = "Select * From merch INNER JOIN game_info ON merch.merch_id=game_info.game_id WHERE merch_id = $game_id";
	$result = mysqli_query($db,$query) or die("Error Querying Database");
	
	if($row = mysqli_fetch_array($result)){
		echo "Are you sure you want to delete this post?<br><br>";
		echo "Game name: ".$row['title']."<br>";
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
