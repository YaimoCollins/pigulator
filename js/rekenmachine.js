function insert(getal) {
    document.form.textview.value += getal;
}

function gelijkAan() {
    var getal = document.form.textview.value;

    if (getal) {
        document.form.textview.value = eval(getal);
    }
}

function clean() {
    document.form.textview.value = "";
}

function back() {
    var getal = document.form.textview.value;
    document.form.textview.value = getal.substring(0, getal.length - 1);
}

function berekenReeks() {
    var getalInput = parseFloat(document.getElementById("getalInput").value);
    var eindGetal = parseFloat(document.getElementById("eindGetal").value);
    var reeks = document.getElementById("reeks");
    var reeksInvoer = reeks.options[reeks.selectedIndex].text;
	document.getElementById("bubble").style.display = "block";

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

    for (var i = 1; i <= eind; i++) {
        
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
        console.log(resultaat);
    }
}
