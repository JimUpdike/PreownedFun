<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" href="style.css" type="text/css" />
<body>
	<div id="bannerLeft">
	<?php 
		session_start();
		
		if (isset($_SESSION['username'])){
			echo "<p><a href=\"accountSettings.php\">Account Settings</a></p>";
			
		}
		else {
			
				echo "<p><a href=\"login.php\">Login</a></p>";
		}
	?>
	</div>
	<div id="bannerRight">
	<form action=searchController.php method=get>
     <input type=text name=username />
    <input type=submit value="Search!" />
	</form>
	<br/>	
	
	</div>
    <div id="left">
	<!-- Browse box should go here while on the navigation portion of the site, and when on accounts setting page, options like change password, view current postings and previous transactions should go here -->
	
	</div>

    <div id="right">
	
			<!--content goes here -->
		</div>

</body>

</html>