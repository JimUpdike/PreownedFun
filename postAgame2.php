<html>


<?php
session_start();
	include "db_connect.php";
	if (isset ($_SESSION['userID'])){
	$seller = $_SESSION['userID'];
	
	$nme = mysqli_real_escape_string($db, trim($_POST['gameName']));
	$mkr = mysqli_real_escape_string($db, trim($_POST['creators']));
	$gen =mysqli_real_escape_string($db, trim($_POST['genre']));
	$esrb  =mysqli_real_escape_string($db, trim($_POST['rating']));
	$yr =mysqli_real_escape_string($db, trim($_POST['yearMade']));
	$manul =mysqli_real_escape_string($db, trim($_POST['manual']));
	$cond =mysqli_real_escape_string($db,trim($_POST['cond']));
	$console = mysqli_real_escape_string($db, trim($_POST['console']));
        $price =mysqli_real_escape_string($db, trim($_POST['Price']));	
	$query_for_game = 'Select * from game_info where title ="'.$nme.'"';
	$result_for_game = mysqli_query($db, $query_for_game);
	$row = mysqli_fetch_array($result_for_game);
	if ($row == null){
		$query_insert_game= "INSERT INTO game_info VALUES (null,'$nme','$mkr','$gen','$esrb','$yr','$console')";
		$result_insert_game =mysqli_query($db, $query_insert_game) 
			OR DIE ("ERROR INSERTING GAME".$query_insert_game);
		
		$query_insert_merch = "INSERT INTO merch VALUES (null, (select MAX(game_info.game_id) from game_info), $price, '$manul', '$cond')";
		$result_insert_merch = mysqli_query($db, $query_insert_merch) 
			OR DIE ("ERROR INSERTING MERCH".$query_insert_merch);
		$qs ="INSERT INTO for_sale VALUES ((SELECT MAX(merch_id) from merch), $seller)";
		$result_insert_merch = mysqli_query($db, $qs)
			 OR DIE ("ERROR INSERTING SALE");	
	}
	else{
		$game_id =  $row["game_id"];
		$query_insert_merch = "INSERT INTO merch VALUES (null, $game_id, $price, '$manul', '$cond')";
		$result_insert_merch = mysqli_query($db, $query_insert_merch) 
			OR DIE ("ERROR INSERTING MERCH");
		$qs ="INSERT INTO for_sale VALUES ((SELECT MAX(merch_id) from merch), $seller)";
		$result_insert_merch = mysqli_query($db, $qs)
			 OR DIE ("ERROR INSERTING SALE");	
		
	}
	
	
	echo "<p><a href=\"index.php\">Continue</a></p>";	
}

else{
echo "You must login in to post a game!";
	echo "<p><a href=\"index.php\">Continue</a></p>";

}


	?>
</div>
</html>
