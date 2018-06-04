function berekenReeks() {
    var getalInput = parseFloat(document.getElementById("getalInput").value);
    var eindGetal = parseFloat(document.getElementById("eindGetal").value);
    var reeks = document.getElementById("reeks");
    var reeksInvoer = reeks.options[reeks.selectedIndex].text;
	document.getElementById("bubble").style.display = "block";
	document.getElementById("rekengir").src = "img/crazygir.png";

    if (reeksInvoer == "Breukenreeks") {
        berekenBreuk(getalInput);
    }

    if (reeksInvoer == "Machtreeks") {
        berekenMacht(getalInput);
    }

    if (reeksInvoer == "Tafels") {
        berekenTafel(getalInput, eindGetal);
    }

    if (reeksInvoer == "Kwadratenreeks") {
        berekenKwadraat(getalInput);
    }
}

function berekenBreuk(input) {
    var resultaat;
    document.getElementById("output").innerHTML = "";

    for (var i = 1; i <= input; i++) {
        resultaat = 1 / i;
        document.getElementById("output").innerHTML += 1 + " / " + i + " = " + resultaat + "<br>";  
    }
}

function berekenMacht(input) {
    var resultaat;
    var vorigeUitkomst = 1;
    document.getElementById("output").innerHTML = "";

    for (var i = 1; i <= 15; i++) {
        resultaat = vorigeUitkomst * input;
        vorigeUitkomst = resultaat;
        document.getElementById("output").innerHTML += input + "<sup>" + i + "</sup>" + " = " + resultaat + "<br>";
    }
}

function berekenTafel(input, eind) {
    var resultaat;
    document.getElementById("output").innerHTML = "";

    for (var i = 1; i <= eind; i++) {
        resultaat = input * i;
        document.getElementById("output").innerHTML += i + " x " + input + " = " + resultaat + "<br>";
    }
}

function berekenKwadraat(input) {
    var resultaat;
    document.getElementById("output").innerHTML = "";

    for (var i = 1; i <= input; i++) {
        resultaat = i * i;
        document.getElementById("output").innerHTML += i + "<sup>" + 2 + "</sup>" + " = " + resultaat + "<br>";
    }
}
