<html xmlns="http://www.w3.org/1999/xhtml">


<?php include "template.php"; ?>

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