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


		$query = "select * from currentpostings where gamename like '%%'";
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
		$row = mysqli_fetch_array($result);

		if($row != null) {
			echo "$row";
		} else {
			echo "No search results.";
		}
	
	?>


</div>
</body>
</html>
