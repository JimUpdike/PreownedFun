<html>
<body>
<?php
  session_start();
  include('template.php');
  include "db_connect.php";
?>
<div id="right">
<table>
<tr><th>Name</th><th>Price </th><th>Creator</th><th>Genre</th><th>Year Released</th><th>Manual</th><th>Condition</th><th>Console</th>
<th>Seller Name</th></tr>
<?php


  if(isSet($_GET['id'])) {
	$game_id = $_GET['id'];
	$query = "Select merch.*,users.username, game_info.* From for_sale INNER JOIN users INNER JOIN game_info INNER JOIN merch ON for_sale.seller_id=users.user_id and for_sale.merch_id = merch.merch_id and merch.game_id = game_info.game_id WHERE merch.merch_id =$game_id";
	$result = mysqli_query($db,$query) or die("Error Querying Database");
	
	if($row = mysqli_fetch_array($result)){
		$nme = $row['title'];
		$price = $row['price'];
		$mkr = $row['creators'];
		$gen = $row['genre'];
		$yr = $row['yearMade'];
		$manul = $row['manual'];
		$cond = $row['cond'];
		$console = $row['platform'];
		$user = $row['username'];
		
		echo "<tr><td>$nme</td><td>$price </td><td>$mkr</td><td>$gen</td><td>$yr</td><td>$manul</td><td>$cond</td><td>$console</td><td>$user</td></tr> ";
 
  }
  }
 ?>
</table>
</div>

</body>
</html>
