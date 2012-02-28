<?php
	session_start();
	include "db_connect.php";
	$name = $_POST['username'];
	$pass = $_POST['password'];
	$pass2 = $_POST['password2'];
	
	if($name == null) {
		header("Location: register.php?bad=1");
		exit("");
	}
	if($pass == null) {
		header("Location: register.php?bad=1");
		exit();
	}
	if($pass2 == null) {
		header("Location: register.php?bad=1");
		exit("");
	}
	if($pass != $pass2) {
		header("Location: register.php?bad=2");
		exit("");
	}
	
	
	$query = "select * from userRep WHERE username = '$name'";
	$result = mysqli_query($db, $query)
	or die ("ERROR SELECTING");
   	

	$row = mysqli_fetch_array($result);
	if($row == null) {
		$query = "insert into userRep values (0, '$name', '$pass');";
		mysqli_query($db, $query);

		$_SESSION['username'] = $name;

		header("Location: index.php");
		exit("");
	} else {
		header("Location: register.php?fail=1");
		exit("");
	}


?>
