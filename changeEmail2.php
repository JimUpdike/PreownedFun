  <html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
include "template.php"; 
?>
<div id="left">
<i><b><u>Account settings index</u></b></i>
<table class="displayTable">
<ul class=browseUL>
	
			<li class=browseLI>
			<a href="changePass.php"> Change Password </a></br></br>
			</li>
			<li class=browseLI>
			<a href="changeEmail.php"> Change Email </a></br></br>
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
  include "db_connect.php";
  $pass = $_POST['password'];
  $newEmail = $_POST['newEmail'];
  $username= $_SESSION['username'];
  $query = "select * from users where username='$username' AND password=SHA('$pass');";
  $result = mysqli_query($db, $query);
  if ($row = mysqli_fetch_array($result)){
	echo "Your email has been changed.";
	$query2 = "update users set email='$newEmail' where username='$username';";
	$result2 = mysqli_query($db, $query2) or die("Error Querying Database");
  }
  else{
	echo "Invalid input, please try again.<br>";
	echo "<form action='changeEmail2.php' method='post'>";
	echo "Enter your password: <br><input type='password' name='password'/><br>";
	echo "Enter your new email: <br><input type='text' name='newEmail'/><br>";
	echo "<input type='submit' value='Submit' /></form>";
  }
  ?>
</div>
</html>
