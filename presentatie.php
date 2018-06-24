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
    <script src="js/presentatie.js"></script>
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
                        <li class="dropdown nav-item">
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
       
   
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>   
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h1>Presentatie</h1>
		<div class="row justify-content-center" id="bubble1">
            <!-- inhoud van de tekstwolk uit database -->
            <div class="speech-bubble-ds">
                <p>Hier leg ik uit wat je allemaal kunt doen op deze website!</p>
                <div class="speech-bubble-ds-arrow"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <img class="verteller" src="img/blancgir.png" alt="Deze foto werkt niet">
        </div>
    </div>
    <div class="carousel-item">
      <h1>De Rekenmachine</h1>
		<div class="row justify-content-center" id="bubble1">
            <!-- inhoud van de tekstwolk uit database -->
            <div class="speech-bubble-ds">
                <p>Met de rekenmachine kun je dingen uitrekenen die een normale rekenmachine ook uit kan rekenen.</p>
                <div class="speech-bubble-ds-arrow"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <img class="verteller" src="img/blancgir.png" alt="Deze foto werkt niet">
        </div>
    </div>
    <div class="carousel-item">
       <h1>Getallenreeksen</h1>
		<div class="row justify-content-center" id="bubble1">
            <!-- inhoud van de tekstwolk uit database -->
            <div class="speech-bubble-ds">
                <p>De pagina getallenreeks bestaat uit 2 delen:<br>
                		- Fibonacci reeks<br>
                		- Priemgetallen<br>
                		(Voer een eindgetal in, tot daar zal ik berekenen.)
                	</p>
                <div class="speech-bubble-ds-arrow"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <img class="verteller" src="img/blancgir.png" alt="Deze foto werkt niet">
        </div>
    </div>
    
    <div class="carousel-item">
       <h1>Pittige rekenpagina</h1>
		<div class="row justify-content-center" id="bubble1">
            <!-- inhoud van de tekstwolk uit database -->
            <div class="speech-bubble-ds">
                <p>Ook deze pagina bestaat uit 2 verschillende onderdelen:<br>
                - Omrekencalculator voor alle talstelsels.<br>
                - Ontbinden in priemgetallen.
                </p>
                <div class="speech-bubble-ds-arrow"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <img class="verteller" src="img/blancgir.png" alt="Deze foto werkt niet">
        </div>
    </div>
    
    <div class="carousel-item">
       <h1>Rad van fortuin</h1>
		<div class="row justify-content-center" id="bubble1">
            <!-- inhoud van de tekstwolk uit database -->
            <div class="speech-bubble-ds">
                <p> Hier kun je aan 2 raden draaien waarbij de uitkomst bij elkaar op wordt opgeteld en weergeven.
                Handig dus om te gebruiken als dobbelsteen.
                </p>
                <div class="speech-bubble-ds-arrow"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <img class="verteller" src="img/blancgir.png" alt="Deze foto werkt niet">
        </div>
    </div>
    
    <div class="carousel-item">
       <h1>Shoot the pig</h1>
		<div class="row justify-content-center" id="bubble1">
            <!-- inhoud van de tekstwolk uit database -->
            <div class="speech-bubble-ds">
                <p> Om na al die berekeningen een beetje afleiding te zoeken kun je terecht op deze pagina,<br>
                hier kun je mijn eigen versie van 'Angry Birds' spelen!
                </p>
                <div class="speech-bubble-ds-arrow"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <img class="verteller" src="img/blancgir.png" alt="Deze foto werkt niet">
        </div>
    </div>
    <div class="carousel-item">
       <h1>Dit was het dan!</h1>
		<div class="row justify-content-center" id="bubble1">
            <!-- inhoud van de tekstwolk uit database -->
            <div class="speech-bubble-ds">
                <p> Hierbij zijn we helaas ten einde van mijn presentatie gekomen.. <br>
                Mochten er nog vragen of opmerkingen zijn kun je ons altijd mailen via het contactformulier.
                </p>
                <div class="speech-bubble-ds-arrow"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <img class="verteller" src="img/sadgir.png" alt="Deze foto werkt niet">
        </div>
    </div>
  </div>
 
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
