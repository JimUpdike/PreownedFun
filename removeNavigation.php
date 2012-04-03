<?php

session_start();
unset($_SESSION['dbNav']);
unset($_SESSION['navDisplay']);
if (isset ($_SESSION['dbNav'])){
echo "Nope!";
}
else{
header ('Location: index.php');
}

?>
