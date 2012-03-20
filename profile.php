<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
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
	$query2 = "SELECT * FROM userRep WHERE username = '$name'";
	$result2 = mysqli_query($db, $query2) or die("Error Querying Database");
	while($row2 = mysqli_fetch_array($result2)){
		$rating = $row2['rating'];
		echo "<h3>Seller Rating: $rating</h3>";
	}
	
	?>
	<br>Listings: 
	<table class="displayTable">
	<tr><th> Name </th><th> Quality </th><th> Price </th></tr>
	<?php
	$query = "SELECT * FROM currentPostings INNER JOIN userRep ON userRep.username = '$name' AND currentPostings.seller_id = userRep.id";
	$result = mysqli_query($db, $query) or die("Error Querying Database");
	while($row = mysqli_fetch_array($result)) {
		$name = $row['gameName'];
		$cond = $row['cond'];
		$price = $row['price'];
		$id = $row['post_id'];
		echo "<tr><td><a href='gamepost.php?id=$id'>$name<a></td><td>$cond</td><td>$price</td></tr>\n";
	}
					
	mysqli_close($db);
	?>
	</table>


</html>
</div>
</html>