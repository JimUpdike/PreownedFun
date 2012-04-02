<html>
<?php
	include "template.php";
	include "db_connect.php";
?>
<head>
	<title>Search Results</title>
</head>
<body>
<div id="right">

	<?php
		if(isset($_GET['game'])) {
			$title = $_GET['game'];
		} else { $title = ""; }
		if(isset($_GET['price'])) {
			$price = $_GET['price'];
		} else { $price = ""; }
		if(isset($_GET['rating'])) {
			$esrb = $_GET['rating'];
		} else { $esrb = ""; }
		if(isset($_GET['genre'])) {
			$genre = $_GET['genre'];
		} else { $genre = ""; }
		if(isset($_GET['cond'])) {
			$cond = $_GET['cond'];
		} else { $cond = ""; }
		if(isset($_GET['console'])) {
			$platform = $_GET['console'];
		} else { $platform = ""; }
		

		$query = "select merch.price, merch.cond, game_info.*, users.username, users.rating from for_sale inner join merch inner join game_info inner join users on for_sale.merch_id = merch.merch_id and for_sale.seller_id = users.user_id and merch.game_id = game_info.game_id where title like '%%'";
		
		$query2 = "";
		if($title != null) {
			$query .= " and title like '%$title%'";
		}
		if($price != null) {
			$query .= " and price <= $price";
		}
		if($esrb != null) {
			$query .= " and esrb like '$esrb'";
		}
		if($genre != null) {
			$query .= " and genre like '$genre'";
		}
		if($cond != null) {
			$query .= " and cond like '$cond'";
		}
		if($platform != null) {
			$query .= " and platform like '$platform'";
		}
		$query .= ";";
		$result = mysqli_query($db, $query) or die ("ERROR SELECTING");
	?>
		
	<table class="displayTable">
		<tr><th> Name </th>
		<th> Quality </th>
		<th> Price </th>
		<th> Seller </th>
		<th> Seller Rating </th></tr>
		
		<?php
			$rowcount = 0;
			$row = mysqli_fetch_array($result);
			while($row != False) {
				$rowcount++;
				if(($rowcount % 2) == 1) { //odd rows yellow
					$td = "<td class=off>";
				} else { //even rows white
					$td = "<td>";
				}

				echo "<tr>";
				$link = "gamepost.php?id=".$row['game_id'];
				echo $td.'<a href="'.$link.'">'.$row['title']."<a></td>";
				echo $td.$row['cond']."</td>";
				echo $td.$row['price']."</td>";
				$username = $row['username'];
				echo $td."<a href='profile.php?username=$username'>$username<a></td>";
				$rating = $row['rating'];
				if($rating = -1) {
					$rating = "Not Rated";
				}
				echo $td.$rating."</td>";
				echo "</tr>";
				
				$row = mysqli_fetch_array($result);
			}
		?>

	</table>

</div>
</body>
</html>
