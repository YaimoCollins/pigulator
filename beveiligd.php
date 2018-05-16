<?php 

session_start();
if ($_SESSION['ingelogd'] = "ja"){
	
}
else {
	header("Location: inloggen.php");
}
?>