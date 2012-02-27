<html>
<?php
	session_start();
	include "db_connect.php";
	$name = $_POST['username'];
	$pass = $_POST['password'];
	
	
	$query = "select * from userRep WHERE username = '$name' AND password = '$pass'";
   $result = mysqli_query($db, $query)
   or die ("ERROR SELECTING");
   
   if ($row = mysqli_fetch_array($result))
   {
		$_SESSION['username'] = $name;
		echo "<p>Thanks for logging in, $name</p>\n";
   		
		echo "<p><a href=\"index.php\">Continue</a></p>";
	}
	
	else
	{
		echo "<p>Incorrect username or password</p>\n";
   		echo  "<h1>Log In</h1>\n  <form method=\"post\" action=\"login.php\">";
    	echo "<label for=\"username\">Username:</label><input type=\"text\" id=\"username\" name=\"username\" /><br />";
		echo "<label for=\"pw\">Password:</label><input type=\"password\" id=\"pw\" name=\"pw\" /><br />";
		echo "<input type = \"submit\" value = \"Login!\">";
	}
	
?>
	</html>