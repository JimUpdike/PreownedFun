<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include "template.php"; 
?>
<div id="left">
<i><b><u>Browse Box</u></b></i>
		<ul class=browseUL>
		<li class=browseLIHeader>
			Price:
		 </li>
		 <li class=browseLI>
			0.1-10.00$
			</li>
			<li>
			10.01-20.00$
			</li>
			<li>
			etc
		   </li>
		    <br/>
			<li class=browseLIHeader>
			Quality
		 </li>
		
		 <li class=browseLI>
			</li>
			Poor
			<li class=browseLI>
			Mediocre
		   </li>
			<li class=browseLI>
			Fair
			</li>
			<li class=browseLI>
			Good
		   </li>
		   <li class=browseLI>
			Great
		   </li>
		   <li class=browseLI>
			Mint
		   </li>
		</ul>
	

</div>
<div id="right">
  <?php 
  include "db_connect.php";
  $oldPw = $_POST['oldPassword'];
  $newPw = $_POST['newPassword'];
  $newPw2 = $_POST['newPassword2'];
  #$username=$_SESSION['username'];
  $username='alex';
  $query = "select * from userRep where username='$username' AND password='$oldPw';";
  $result = mysqli_query($db, $query);
  if ($row = mysqli_fetch_array($result)){
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