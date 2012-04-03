<html>
<?php 
session_start();
include "template.php";
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
		$query = "select * from users WHERE username = '$name'";
		$result = mysqli_query ($db, $query)
		or die ("error selecting");
	if ($row = mysqli_fetch_array($result))
	{	$uID = $row['user_id'];
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
	<th> Manual </th>
	<th> Delete </th></tr>
	<?php
		$q2 = "select * from for_sale inner join merch inner join game_info on for_sale.seller_id = $uID and merch.merch_id = for_sale.merch_id and game_info.game_id = merch.game_id"; 
		$r2 = mysqli_query($db, $q2)
			or die ("error getting list");

		$i = 0;
		while($row2 = mysqli_fetch_array($r2)){	
			$name = $row2['title'];
			$cond = $row2['cond'];
			$price = $row2['price'];
			$manual = $row2['manual'];
			$id = $row2['merch_id'];
			if ($manual == 'Y'){
				$manual = 'Yes';
			} else{
				$manual = 'No';
			}
			$id = $row2['merch_id'];
			
			if ($i % 2 == 0){
				$td = "<td class=off>";
			}
			else {
				$td = "<td>";
			}
			echo"<tr>$td <a href='gamepost.php?id=$id'>$name<a></td> $td $cond </td> $td $price </td>$td $manual </td>$td <a href='deletePost.php?id=$id'>Delete<a></td> </td></tr>"; 
			$i++;
		}
		
	
		
	?>
	</table>
</div>
</html>
