<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" href="style.css" type="text/css" />
<body>
	<div id="bannerLeft">
	<p>
	<?php 
		echo "<a href=\"index.php\">Home</a> ";
		echo "<a href=\"search.php\">Search</a> ";
		echo "<a href=\"userList.php\">User Index</a> ";
		
		//added this here
		
		
		if (isset($_SESSION['username'])){
		echo "<a href = \"postAgame.php\">Post A Game</a> ";
			echo "<a href=\"accountSettings.php\">Account Settings</a> ";
			echo "<a href=\"logout.php\">Logout</a> ";
		}
		else {

			echo "<a href=\"register.php\">Register</a>    ";
			echo "<a href=\"login.php\">Login</a>    ";
		}
	?>
	</p>
	</div>
	<div id="bannerRight">
	<form action=result.php method=get>
		Find a game: <input type=text name=game />
    		<input type=submit value="Search!" />
	</form>
	</br>
	
	</div>
    <div id="left">
	<!-- Browse box should go here while on the navigation portion of the site, and when on accounts setting page, options like change password, view current postings and previous transactions should go here -->
	
	</div>

    <div id="right">
	
			<!--content goes here -->
		</div>

</body>

</html>
