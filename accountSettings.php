<html>
<?php include "template.php";
//session_start();
include "db_connect.php";
 ?>
<div id="left">
<i><b><u>Account settings index</u></b></i>
<table class="displayTable">
<ul class=browseUL>
	
			<li class=browseLI>
			<a href="changePass.php"> Change Password </a></br></br>
			</li>
		<li class=browseLI>
			<a href="logout.php"> Logout </a>
			</li>
		    <br/>
		</ul>
</table>


</div>

<div id="right">
	<?php 
	if (isset($_SESSION['username'])){
		$name = $_SESSION['username'];
		$query = "select * from userRep WHERE username = '$name'";
		$result = mysqli_query ($db, $query)
		or die ("error selecting");
	if ($row = mysqli_fetch_array($result))
	{	$uID = $row['id'];
		echo "Thank you for logging in ".$row['username'];
		echo " <br/> You can use the navigation bar on the right to hopefully figure out where to go";
		echo "<br/>  Your current postings:";
	}
	else {
	echo "You aren't logged in!";
   } 
   }
	?>
	
	<table class="displayTable">
	<tr><th> Name </th>
	<th> Quality </th>
	<th> Price </th>
	<th> Delete </th></tr>
	<?php
		$q2 = "select * from currentPostings cp where cp.seller_id = $uID"; 
		$r2 = mysqli_query($db, $q2)
			or die ("error getting list");
		while ($row2 = mysqli_fetch_array($r2)){
			echo "<tr>";
			echo "<td>".$row2['gameName']."</td>";
			echo "<td>".$row2['cond']."</td>";
			echo "<td>".$row2['price']."</td>";
			$link = "deletePost.php?id=".$row2['post_id'];
			echo "<td><a href=".$link.">Delete<a></td>";
			echo "</tr>";
		}
		
	
		
	?>
	</table>
</div>
</html>
