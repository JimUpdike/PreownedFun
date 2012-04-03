<html>
<body>
<?php
session_start();  
include "db_connect.php";
?>
<div id="right">
<?php


  if(isSet($_GET['id'])&&isSet($_SESSION['username'])) {
	$merch_id = $_GET['id'];
	$user_id = $_SESSION['userID'];
	$query = "SELECT * FROM merch INNER JOIN for_sale ON merch.merch_id = $merch_id AND for_sale.merch_id = $merch_id AND for_sale.seller_id = $user_id";
	$result = mysqli_query($db,$query) or die("Error Querying Database1 ".$query);
	if ($row = mysqli_fetch_array($result)){
		$game_id = $row['game_id'];
		$q2 = "delete from for_sale where seller_id = $user_id and for_sale.merch_id = $merch_id";
		$q3 = "delete from merch where merch_id = $merch_id";
		$q4 = "delete from game_info where game_id = $game_id";
		$result2 = mysqli_query($db,$q2) or die("Error Querying Database: for_sale");
		$result3 = mysqli_query($db,$q3) or die("Error Querying Database: merch");
		
		echo "Your posting has been deleted.";
	
	}
	else {
		echo "An error has occured somewhere, please contanct an Admin, somehow";
	}
	echo  "<p><a href=\"index.php\">Continue</a></p>";

}
 ?>
</table>
</div>

</body>
</html>
