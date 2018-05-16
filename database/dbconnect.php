<?php
//Stap 1: verbinding maken en checken of de connectie werkt.
$host = "localhost";
$user = "root";
$pass = "";
$db = "pigulator";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("verbinding is mislukt");
}
?>