<html xmlns="http://www.w3.org/1999/xhtml">


<?php include "template.php"; ?>

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
       <h2>Change Password</h2>
	   <html>
	<form action="changePass2.php" method="post">
	Enter your old password: <br><input type="password" name="oldPassword"/>
	<br>
	Enter a new password: <br><input type="password" name="newPassword"/>
	<br>
	Reenter your new password: <br><input type="password" name="newPassword2"/>
	<br>
	<input type="submit" value="Submit" />
	</form>


</html>
</div>
</html>