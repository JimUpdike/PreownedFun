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
		$gamename = $_GET['game'];
		$price = $_GET['price'];
		$esrb = $_GET['rating'];
		$genre = $_GET['genre'];
		$cond = $_GET['cond'];
		$platform = $_GET['console'];


		$query = "select currentpostings.*, userrep.username, userrep.rating from currentpostings inner join userrep on currentpostings.seller_id = userrep.id where gamename like '%%'";
		if($gamename != null) {
			$query .= " and gamename like '%$gamename%'";
		}
		if($price != null) {
			$query .= " and price < $price";
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
				$link = "gamepost.php?id=".$row['post_id'];
				echo $td.'<a href="'.$link.'">'.$row['gameName']."<a></td>";
				echo $td.$row['cond']."</td>";
				echo $td.$row['price']."</td>";
				echo $td.$row['username']."</td>";
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
