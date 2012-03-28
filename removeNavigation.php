<?php

session_start();
unset($_SESSION['dbNav']);
if (isset ($_SESSION['dbNav'])){
echo "Nope!";
}
else{
header ('Location: index.php');
}

?>
