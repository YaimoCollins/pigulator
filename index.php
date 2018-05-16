<?php require "database/dbconnect.php"; 
session_start();
if ($_SESSION['ingelogd'] == "ja"){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title></title>
</head>

<body style= "background-color:rgb(5, 36, 83);">
   echo "<br> <a href='logout.php'>Uitloggen</a>";
    <div class="row justify-content-center">
        <img class="logo" src="img/logo.png" alt="Deze foto werkt niet">
    </div>
    
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="#">Presentatie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Rekenmachine</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Getallenreeks</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pittige rekensommen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Rad van Fortuin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Shoot the pig</a>
        </li>
    </ul>
    
    <div class="row justify-content-center">
        <!-- inhoud van de tekstwolk uit database -->
        <img class="tekstwolk" src="img/tekstwolk_placeholder.png" alt="Deze placeholder werkt niet">
    </div>
    
    <div class="row justify-content-center">
        <img class="verteller" src="img/happygir.png" alt="Deze foto werkt niet">
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
<?php }

else {
	header("Location: inloggen.php");
}
?>