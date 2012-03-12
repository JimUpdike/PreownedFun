<html>
<body>
<?php
  include('template.php');
  include "db_connect.php";
?>
<div id="right">
<h2>CURRENT GAME POST</h2>


<table>
<tr><th>Name</th><th>Creator</th><th>Genre</th><th>Year</th><th>Rating</th><th>Manual</th><th>Condition</th><th>Counsole</th></tr>


<?php
include('db_connect.php');
$query = "SELECT * FROM  PostAGame ORDER BY gameName";
$result = mysqli_query($db,$query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)){
$nme = $row['gameName'];
$mkr = $row['creators'];
$gen = $row['genre'];
$yr = $row['yearMade'];
$rting = $row['rating'];
$manul = $row['manual'];
$cond = $row['cond'];
$console = $row['console'];

echo "<tr><td>$nme</td><td>$mkr</td><td>$gen</td><td>$yr</td><td>$rting</td><td>$manul</td><td>$cond</td><td>$console</td></tr> ";
}
echo "<p><a href=\"postAgame.php\">Post Again</a></p>";	
mysqli_close($db);
?>


</table>

</div>
</body>
</html>