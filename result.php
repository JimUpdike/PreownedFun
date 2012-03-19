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
		$gamename = $_POST['game'];
		$price = $_POST['price'];
		//$rating = $_POST['rating'];
		$genre = $_POST['genre'];
		$cond = $_POST['cond'];
		$platform = $_POST['console'];
		//$seller = $_POST['seller'];
		

		$query = "select * from currentpostings where gamename like '%%'";
		if($gamename != null) {
			//$query .= " and gamename like '%$gamename%'";
		}
		if($price != null) {
			//$query .= " and price like '%$price%'";
		}
		if($genre != null) {
			echo "$genre";
			//$query .= " and genre like '%$genre%'";
		}
		if($cond != null) {
			echo "$cond";
			//$query .= " and cond like '%$cond%'";
		}
		if($platform != null) {
			echo $platform;
			//$query .= " and platform like '%$platform%'";
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
