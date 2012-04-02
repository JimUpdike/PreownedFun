<html>
<?php
	session_start();
	include "template.php";
?>

<div id="right">
<?php
	include "db_connect.php";
	$name = mysqli_real_escape_string($db, trim($_POST['username']));
	$pass =mysqli_real_escape_string($db, trim($_POST['password']));
	
	
	$query = "select * from users WHERE username = '$name' AND password = SHA('$pass')";
   $result = mysqli_query($db, $query)
   or die ("ERROR SELECTING");
   
   if ($row = mysqli_fetch_array($result))
   {
		$_SESSION['username'] = $row['username'];
		$_SESSION['userID'] = $row['user_id'];
		echo "<p>Thanks for logging in, $name, </p>\n";
   		
		echo "<p><a href=\"index.php\">Continue</a></p>";
	}
	
	else
	{
		echo "<p>Incorrect username or password</p>\n";
   		echo  "<h1>Log In</h1>\n  <form method=\"post\" action=\"login2.php\">";
    	echo "<label for=\"username\">Username:</label><input type=\"text\" id=\"username\" name=\"username\" /><br />";
		echo "<label for=\"pw\">Password:</label><input type=\"password\" id=\"pwordass\" name=\"password\" /><br />";
		echo "<input type = \"submit\" value = \"Login!\">";
	}
	
?>
	</div>
	</html>

