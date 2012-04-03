<?php
session_start();
include "db_connect.php";

	if (isSet($_GET['Column']) && isSet($_GET['Type'])){

	$priceQ = priceCheck();
	$conditionQ = conditionCheck();
	$platformQ = platformCheck();
	$morethanOne = False;
	$query = "SELECT merch.*, users.username, game_info.* from for_sale INNER JOIN users INNER JOIN game_info INNER JOIN merch on for_sale.seller_id = users.user_id and merch.merch_id = for_sale.merch_id and game_info.game_id = merch.game_id WHERE ";
    

	if ($priceQ !== FALSE){
		$query = $query.$priceQ;

		$morethanOne=True;		
	}
	if ($conditionQ != FALSE){
		if ($morethanOne==True){
			$query=$query." AND ".$conditionQ;
		}
		else {
		$query = $query.$conditionQ;
		$morethanOne=True;	
		}
	}
	if ($platformQ != FALSE){
		if ($morethanOne==True){
			$query=$query." AND ".$platformQ;
		}
		else{
		$query = $query.$platformQ;
		$morethanOne=True;	
		}
	}
	echo "<br/> $query <br/>";
	$_SESSION['dbNav'] = $query;
	header ('Location: index.php');
}
else {
 	echo "Something went wrong. Please return to index and try again";
}
function priceCheck(){
	if($_GET['Column'] == 'Price'){
		$type1 = $_GET['Type'] + 0;
		$number = $type1 + 0.00;
		if ($number >= 100.00){
			$s = "merch.price > $type1";
			$_SESSION['navDisplay'][0] = "prices higher than 100";
	}
		else{
		$type2 = $type1 + 9.99;
		$s = "merch.price >= $type1 AND merch.price <= $type2";
			
			$_SESSION['navDisplay'][0] = "prices between $type1 and $type2";
	}
		$_SESSION ['nav']['0'] = $s;
		echo "<br/> $s <br/>";		
	return $s;
		
	}
	 if (isSet( $_SESSION['nav']['0'])){
		return $_SESSION ['nav']['0'];
	}
	else {
		return FALSE;
	}
}

function conditionCheck(){
	if($_GET['Column'] == 'Condition'){
		$type1 = $_GET['Type'];
		$s = "merch.cond = '$type1'" ;
		$_SESSION ['nav']['1'] = $s;
		$_SESSION['navDisplay'][1] = "in $type1 condition";
		echo "<br/> $s <br/>";	
		return $s;
	}
	 if (isSet( $_SESSION['nav']['1'])){
		return $_SESSION ['nav']['1'];
	}
	else {
		return FALSE;
	}
}
function platformCheck(){
	if($_GET['Column'] == 'Platform'){
		$type1 = $_GET['Type'];
		$s = "game_info.platform  = '$type1'" ;
		$_SESSION ['nav']['2'] = $s;
		$_SESSION['navDisplay'][2] = "on $type1";
		echo "<br/> $s <br/>";	
		return $s;
	}
	 if (isSet( $_SESSION['nav']['2'])){
		return $_SESSION ['nav']['2'];
	}
	else {
		return FALSE;
	}
}

?>
