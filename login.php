<html>
<?php 
session_start();
include "template.php";
include "db_connect.php";
 ?>
<div id="right">
<h2>Login</h2></br>
<form action="login2.php" method="post">
Username: <input type="text" name="username"/>
<br>
Password: <input type="password" name="password"/>
<br>
<input type="submit" value="Login!" />
</form>


</div>
</html>
