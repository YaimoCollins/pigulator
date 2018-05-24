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
                            <a class="nav-link" href="#">Presentatie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rekenmachine.php">Rekenmachine</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Getallenreeks</a>
                        </li>
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
        <div class="row justify-content-center">
            <form name="form">
                <input class="textview" name="textview">
            </form>
        </div>
        <div class="row justify-content-center">
            <table>
                <tr>
                    <td><input class="knop" type="button" value="C" onclick="clean()"></td>
                    <td><input class="knop" type="button" value="<" onclick="back()"></td>
                    <td><input class="knop" type="button" value="/" onclick="insert('/')"></td>
                    <td><input class="knop" type="button" value="x" onclick="insert('*')"></td>
                </tr>
                <tr>
                    <td><input class="knop" type="button" value="7" onclick="insert(7)"></td>
                    <td><input class="knop" type="button" value="8" onclick="insert(8)"></td>
                    <td><input class="knop" type="button" value="9" onclick="insert(9)"></td>
                    <td><input class="knop" type="button" value="%" onclick="insert('%')"></td>
                </tr>
                <tr>
                    <td><input class="knop" type="button" value="4" onclick="insert(4)"></td>
                    <td><input class="knop" type="button" value="5" onclick="insert(5)"></td>
                    <td><input class="knop" type="button" value="6" onclick="insert(6)"></td>
                    <td><input class="knop" type="button" value="-" onclick="insert('-')"></td>
                </tr>
                <tr>
                    <td><input class="knop" type="button" value="1" onclick="insert(1)"></td>
                    <td><input class="knop" type="button" value="2" onclick="insert(2)"></td>
                    <td><input class="knop" type="button" value="3" onclick="insert(3)"></td>
                    <td><input class="knop" type="button" value="+" onclick="insert('+')"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="knop" style="width: 106px" type="button" value="0" onclick="insert(0)"></td>
                    <td><input class="knop" type="button" value="." onclick="insert('.')"></td>
                    <td><input class="knop" type="button" value="=" onclick="gelijkAan()"></td>
                </tr>
            </table>
        </div>
        
    </div>
    
    <script type="text/javascript" src="js/rekenmachine.js"></script>
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
