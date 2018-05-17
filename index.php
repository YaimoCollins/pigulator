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
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title></title>
</head>

<body style="background-color: rgb(237, 255, 244)">
    <div class="tyfus">
        <div class="wrapper">
        <div class="row justify-content-center">
            <img class="logo" src="img/logo.png" alt="Deze foto werkt niet" style="color:rgb(191, 255, 219)">
        </div>
            <ul id="navbar" class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" id="importanto" href="#">Homepagina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Presentatie</a>
                </li >
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
                <button class="btn btn-danger" type="button" href="logout.php"><a href="logout.php">Uitloggen</a>
            </ul>
        </div>
        <div class="row justify-content-center" id="bubble">
            <!-- inhoud van de tekstwolk uit database -->
            <div class="speech-bubble-ds">
                <p>Hallo! Ik ben gir! <br>
                Ik ben uw hulpje op deze rekenwebsite.<br> 
                Ik geef u informatie over hoe deze website werkt en daarnaast kan ik ook heel goed rekenen!</p>
            <div class="speech-bubble-ds-arrow"></div>
        </div>
        </div>

        <div class="row justify-content-center">
            <img class="verteller" src="img/happygir.png" alt="Deze foto werkt niet">
        </div>
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
