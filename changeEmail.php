<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
session_start();
include "template.php"; ?>

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
       <h2>Change Email</h2>
	   <html>
	<form action="changeEmail2.php" method="post">
	Enter your password: <br><input type="password" name="password"/>
	<br>
	Enter your new email: <br><input type="text" name="newEmail"/>
	<br>
	<input type="submit" value="Submit" />
	</form>


</html>
</div>
</html>
