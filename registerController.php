<?php
	session_start();
	include "db_connect.php";
	$name = $_POST['username'];
	$em = $_POST['email'];
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
	
	
	$query = 'select * from users WHERE username = "'.$name.'"';
	$result = mysqli_query($db, $query)
	or die ("ERROR SELECTING".$query);
   	

	$row = mysqli_fetch_array($result);
	if($row == null) {
		$query = "insert into users values (0, '$name', SHA('$pass'), -1, '$em');";
		mysqli_query($db, $query);
		
		$q2 = "select * from users WHERE username='$name'";
		$r2 = mysqli_query($db, $q2);
		if ($row2 = mysqli_fetch_array($r2)){
			$_SESSION['userID'] = $row2['user_id'];
		}
		$_SESSION['username'] = $name;

		header("Location: index.php");
		exit("");
	} else {
		header("Location: register.php?fail=1");
		exit("");
	}


?>
