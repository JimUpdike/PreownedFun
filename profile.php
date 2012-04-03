<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
	session_start();
	include "template.php"; 
	$name = $_GET['username'];
	include('db_connect.php');
?>

<div id="left">
<i><b><u>Users Index </u></b></i>
<table class="displayTable">
<ul class=browseUL>
	
		</ul>
</table>

</div>
<div id="right">
<h1><?php echo "$name" ?></h1>
	<?php
	$query2 = "SELECT * FROM users WHERE username = '$name'";
	$result2 = mysqli_query($db, $query2) or die("Error Querying Database");
	while($row2 = mysqli_fetch_array($result2)){
		$rating = $row2['rating'];
		if ($rating == -1.00){
			$rating = 'This user has not been rated.';
		}
		$email = $row2['email'];
		$user_id = $row2['user_id'];
		echo "<h3>Seller Rating: $rating</h3>";
		echo "<h3>Email: $email</h3>";
	}

	
	?>
	<br>Listings: 
	<table class="displayTable">
	<tr><th> Name </th><th> Quality </th><th> Price </th><th> Manual </th></tr>
	<?php
	$query = "SELECT * FROM for_sale INNER JOIN game_info INNER JOIN merch ON for_sale.seller_id = '$user_id' AND for_sale.merch_id = merch.merch_id AND merch.game_id = game_info.game_id";
	$result = mysqli_query($db, $query) or die("Error Querying Database");
	
	$i = 0;
	while($row = mysqli_fetch_array($result)){	
		$name = $row['title'];
		$cond = $row['cond'];
		$price = $row['price'];
		$manual = $row['manual'];
		if ($manual == 'Y'){
			$manual = 'Yes';
		} else{
			$manual = 'No';
		}
		$id = $row['merch_id'];
		
		if ($i % 2 == 0){
			$td = "<td class=off>";
		}
		else {
			$td = "<td>";
		}
		echo"<tr>$td <a href='gamepost.php?id=$id'>$name<a></td> $td $cond </td> $td $price </td>$td $manual </td></tr>"; 
		$i++;
	}
					
	mysqli_close($db);
	?>
	</table>


</html>
</div>
</html>
