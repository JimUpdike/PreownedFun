<html>
<body>
<?php
  include('template.php');
  include "db_connect.php";
?>
<div id="right">
<?php


  if(isSet($_GET['id'])&&isSet($_SESSION['username'])) {
	$game_id = $_GET['id'];
	$name = $_SESSION['username'];
	$query = "Select * From currentPostings INNER JOIN userRep ON currentPostings.post_id = '$game_id' and userRep.username = '$name'";
	$result = mysqli_query($db,$query) or die("Error Querying Database");
	if ($row = mysqli_fetch_array($result)){
		$q2 = "delete from currentPostings where post_id = '$game_id'";
		$result = mysqli_query($db,$q2) or die("Error Querying Database");
		echo "Your posting has been deleted.";
	}
  }
 ?>
</table>
</div>

</body>
</html>