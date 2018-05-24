<?php 

// Check of er een POST is gedaan naar deze pagina.
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	// Bezoeker komt van een form met de 'POST' methode.
	$user = "GAST";
	$password = "Welkom#1";
	$ingevoerdeuser = $_POST['username'];
	$ingevoerdepassword = $_POST['password'];
	
	// if user vult juiste gegevens in:
	if($user == $ingevoerdeuser && $password == $ingevoerdepassword){
		
		// Gegevens in session variabelen zetten zodat je ze kunt gebruiken op beveiligd.php
		session_start();
		$_SESSION['ingelogd'] = "ja";
		$_SESSION['username'] = $ingevoerdeuser;
		// Doorsturen naar de juiste pagina wanneer gegevens goed zijn
		header("Location: index.php");
		
	}
	else {
		// Gegevens niet goed dus terug naar loginscherm.
		header("Location: inloggen.html");
	}
}

// Bezoeker komt niet van een form.
else{
	
// Stuur de bezoeker terug naar het loginform.
	header("Location: inloggen.html");
}

?>