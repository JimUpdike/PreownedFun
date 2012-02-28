<html>
	Enter your desired username and password.<br/><br/>
	<?php
		$bad = @$_GET['bad'];
		$fail = @$_GET['fail'];

		if($bad == '1') {
			echo "Please fill in the fields below.</br></br>";
		}
		if($bad == '2') {
			echo "The passwords did not match</br></br>";
		}
		if($fail == '1') {
			echo "That user already exists!</br></br>";
		}

	?>
	<form action="register2.php" method="post">
		Username: <input type="text" name="username" /><br/>
		Password: <input type="password" name="password" /><br/>
		Re-type<br/>Password:<input type="password" name="password2" />
		<input type="submit" value="Register" />
	</form>

</html>
