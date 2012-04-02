<html>
<body>
<?php
session_start();  
include "db_connect.php";
?>
<div id="right">
<?php


  if(isSet($_GET['id'])&&isSet($_SESSION['username'])) {
	$game_id = $_GET['id'];
	$name = $_SESSION['userID'];
	$query = "Select * From merch INNER JOIN game_info inner join for_sale inner join users ON merch.game_id = game_info.game_id and for_sale.seller_id = $name and for_sale.merch_id = merch.merch_id WHERE merch.merch_id = $game_id";
	$result = mysqli_query($db,$query) or die("Error Querying Database1 ".$query);
	if ($row = mysqli_fetch_array($result)){
		$q2 = "delete from merch where exists (select * from for_sale where for_sale.merch_id= '$game_id')";
		$result = mysqli_query($db,$q2) or die("Error Querying Database");
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
