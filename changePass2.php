<html xmlns="http://www.w3.org/1999/xhtml">
<?php
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
			<a href="logout.php"> Logout </a>
			</li>
		    <br/>
		</ul>
</table>
	

</div>
<div id="right">
  <?php 
  include "db_connect.php";
  $oldPw = $_POST['oldPassword'];
  $newPw = $_POST['newPassword'];
  $newPw2 = $_POST['newPassword2'];
  $username=$_SESSION['username'];
  $query = "select * from userRep where username='$username' AND password='$oldPw';";
  $result = mysqli_query($db, $query);
  if ($row = mysqli_fetch_array($result) && $newPw == $newPw2){
	echo "Your password was successfully changed!";
	$query2 = "update userRep set password='$newPw' where username='$username';";
	$result2 = mysqli_query($db, $query2) or die("Error Querying Database");
  }
  else{
	echo "Invalid input, please try again.<br>";
	echo "<form action='changePass2.php' method='post'>";
	echo "Enter your old password: <br><input type='password' name='oldPassword'/><br>";
	echo "Enter a new password: <br><input type='password' name='newPassword'/><br>";
	echo "Reenter your new password: <br><input type='password' name='newPassword2'/><br>";
	echo "<input type='submit' value='Submit' /></form>";
  }
  ?>
</div>
</html>