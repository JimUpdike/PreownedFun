<html>
<!---do i include this portion ---->


<?php
include "template.php";
?>
<div id="right">

<!----END--->
<?php		
	include "db_connect.php";
	
	$nme = $_POST['gameName'];
	$mkr = $_POST['creators'];
	$gen = $_POST['genre'];
	$yr = $_POST['yearMade'];
	$rting = $_POST['rating'];
	$manul = $_POST['manual'];
	$cond = $_POST['cond'];
	$console = $_POST['console'];
	
	$query = "INSERT INTO PostAGame VALUES (NULL,'$nme','$mkr','$gen','$yr','$rting','$manul','$cond','$console')";
	$result = mysqli_query ($db,$query)
	or die ("ERROR INSERTING");
	mysqli_close($db);
	
	
	echo "<p><a href=\"list.php\">Continue</a></p>";	
	?>
</div>
</html>
