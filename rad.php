<?php require "database/dbconnect.php"; 
session_start();
if ($_SESSION['ingelogd'] == "ja"){

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Pigulator</title>
</head>

<body style="background-color: rgb(237, 255, 244)">
    <div class="tyfus">
        <div class="wrapper">
            <div class="row justify-content-center">
                <img class="logo" src="img/logo.png" alt="Deze foto werkt niet" style="color:rgb(191, 255, 219)">
            </div>
            <nav class="navbar navbar-expand-lg">
                <button id="navknop" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="presentatie.php">Presentatie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rekenmachine.php">Rekenmachine</a>
                        </li>
                        <li class="dropdown nav-item  active">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Getallenreeks
       							 </a>
                            <ul class="dropdown-menu nav-item">
                                <li><a href="fibonacci.php">Fibonacci Reeks</a></li>
                                <li><a href="priemgetallen.php">Priemgetallen Reeks</a></li>
                            </ul>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pittige rekensommen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Rad van fortuin</a>
                            </li>
                            <li class="nav-item" id="uitloggen">
                                <a class="nav-link" href="#">Shoot the pig</a>
                            </li>
                            <li>
                                <button class="btn btn-danger" type="button" href="logout.php"><a href="logout.php">Uitloggen</a></button>
                            </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container" style="margin-top:100px;">
            <table class="table text-center">
                <tr>
                    <td colspan="2"><input id="btnSpinIt" type="submit" value="Spin It" class="input-sm form-control btn-success" onclick="SpinIt()"></td>
                </tr>
                <tr>
                    <td>
                        <div class="pointer"></div>
                        <div id="rad" class="text-center"></div>
                    </td>
                    <td>
                        <div class="pointer"></div>
                        <div id="rad2" class="text-center"></div>
                    </td>
                </tr>
                <tr>
                    <td><input id="ipNumberRad1" type="text" class="input-sm form-control"></td>
                    <td><input id="ipNumberRad2" type="text" class="input-sm form-control"></td>
                </tr>
            </table>
        </div>
<div class="row rekengir">
                <div class="col-lg-4"></div>
                <div class="col-lg-2">
                    <img id="rekengir" src="img/happygir.png" alt="Deze foto werkt niet">
                </div>

                <div class="col-lg-2">
                    <div class="row justify-content-center" id="bubble">
                        <!-- inhoud van de tekstwolk uit database -->
                        <div id="prime_Output" class="speech-bubble-ds">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
 
 </div>
   
    <script type="text/javascript" src="js/rad.js"></script>
     <script type="text/javascript" src="js/priemgetallen.js"></script>
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
