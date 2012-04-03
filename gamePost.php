<html>
<body>
<?php
  session_start();
  include('template.php');
  include "db_connect.php";
?>
<div id="right">

<?php


  if(isSet($_GET['id'])) {
	$game_id = $_GET['id'];
	$query = "Select merch.*,users.*, game_info.* From for_sale INNER JOIN users INNER JOIN game_info INNER JOIN merch ON for_sale.seller_id=users.user_id and for_sale.merch_id = merch.merch_id and merch.game_id = game_info.game_id WHERE merch.merch_id =$game_id";
	$result = mysqli_query($db,$query) or die("Error Querying Database");
	
	if($row = mysqli_fetch_array($result)){
		$nme = $row['title'];
		$price = $row['price'];
		$mkr = $row['creators'];
		$gen = $row['genre'];
		$yr = $row['yearMade'];
		$manul = $row['manual'];
		if ($manul == 'Y'){
			$manul = 'Yes';
		} else {
			$manul = 'No';
		}
		$cond = $row['cond'];
		$console = $row['platform'];
		$user = $row['username'];
		$email = $row['email'];
		
		echo "<h1>$nme</h1><br>";		
		echo "<h3>Game Information</h3>";
		echo "Game name: $nme <br>";
		echo "Game Creator: $mkr <br>";	
		echo "Genre: $gen <br>";
		echo "Console: $console <br><br>";		
		echo "<h3>Sale Information</h3>";
		echo "Seller: <a href='profile.php?username=$user'>$user<a> <br>";
		echo "Price: $price <br>";
		echo "Game Condition: $nme <br>";
		echo "Manual: $manul <br><br>";	
		
		echo "Have more questions? Email the seller (<a href='profile.php?username=$user'>$user<a>)";  
		echo "at <a href= 'mailto:$email'>";
		echo "$email";
		echo"<br>";
		
		$currentUser = $_SESSION['username'];
		if ($currentUser == $user){
			echo "<b>Note:</b> This is your game. <a href='deletePost.php?id=$game_id'>Click here<a> to delete the posting.";
		}
  }
  }
 ?>
</table>
</div>

</body>
</html>
