<?php
session_start();
include "db_connect.php";

	if (isSet($_GET['Column']) && isSet($_GET['Type'])){

	$priceQ = priceCheck();
	$conditionQ = conditionCheck();
	$platformQ = platformCheck();
	$morethanOne = False;
	$query = "Select currentPostings.*, userRep.username, userRep.rating from currentPostings INNER JOIN userRep ON currentPostings.seller_id = userRep.id WHERE ";
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
		$type1 = $_GET['Type'];
		if ($type1 > 100){
			$s = "currentPostings.price > $type1";
		}
		else{
		$type2 = $type1 + 9.99;
		$s = "currentPostings.price >= $type1 AND currentPostings.price <= $type2";
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
		$s = "currentPostings.cond = '$type1'" ;
		$_SESSION ['nav']['1'] = $s;
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
		$s = "currentPostings.platform  = '$type1'" ;
		$_SESSION ['nav']['2'] = $s;
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
