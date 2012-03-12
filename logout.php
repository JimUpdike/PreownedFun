<?php 
session_start();
unset($_SESSION['zipcode']);
session_destroy();

echo "<p><a href=\"index.php\">Continue</a></p>";
?>