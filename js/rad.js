﻿var rotation, time;
var rotation1, time1;
var getallen = [];
//Function 'getRandom', maakt een Random getal aantal waarvan de waarde tussen parameter min en max ligt.
//vb: als min=5 en max=10, dan krijg je een random getal terug waarvan de waarde een 5,6,7,8 of 9 is.
function getRandom(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

function SpinIt() {
    //rotation krijgt een random waarde toegewezen die tussen 800 en 2000 ligt.
    rotation = getRandom(800, 2000);
	rotation1 = getRandom(800,2000);
    //time krijgt een random waarde toegewezen die tussen 5 en 10 ligt.
    time = getRandom(5, 10);
	time1 = getRandom(5, 10);
    //Het rad moet aantal graden draaien, deze waarde wordt aan het rad toegekend d.m.v variabele rotation
    document.getElementById('rad').style.transform = "rotate(" + rotation + "deg)";
	document.getElementById('rad2').style.transform = "rotate(" + rotation1 + "deg)";

    //Aantal graden wat het rad moet draaien, moet verdeeld worden over tijd, de tijd variabele wordt aan het rad toegekend d.m.v variabele time.
    document.getElementById('rad').style.transition = time + "s";
	 document.getElementById('rad2').style.transition = time1 + "s";
    //Het rad begint nu te draaien, op het moment dat het rad stopt, wordt function 'getNumber' uitgevoerd. 
    //De vertraging wordt veroorzaakt door setTimeout
    setTimeout(function () { getNumber(rotation); }, (time * 1000));
	setTimeout(function () { getNumber1(rotation1); }, (time1 * 1000));
    
    if (time <= time1) {
        setTimeout(function () { addNumber(); }, (time1 * 1000));
    } else if (time1 <= time) {
        setTimeout(function () { addNumber(); }, (time * 1000));
    }
}

function getNumber(x) {
    //Het rad moest aantal graden draaien, deze waarde werd aan het rad toegekend d.m.v variabele rotation.
    //Variabele rotation is als een parameter aan function getNumber doorgegeven als x.
    //D.m.v Modulus oftewel % (restwaarde berekening) kunnnen we berekenen op welke cijfer/waarde het rad gaat stoppen.
    //Dit gebeurt d.m.v van een if else if.
    x = x % 360;
    if ((x >= 30) && (x <= 89)) {
        document.getElementById('ipNumberRad1').value = "6";
    } else if ((x >= 90) && (x <= 149)) {
        document.getElementById('ipNumberRad1').value = "5";
    } else if ((x >= 150) && (x <= 209)) {
        document.getElementById('ipNumberRad1').value = "4";
    } else if ((x >= 210) && (x <= 269)) {
        document.getElementById('ipNumberRad1').value = "3";
    } else if ((x >= 270) && (x <= 329)) {
        document.getElementById('ipNumberRad1').value = "2";
    } else {
        document.getElementById('ipNumberRad1').value = "1";
    }
    var number1 = document.getElementById('ipNumberRad1').value;
	getallen.push(number1);
}
	

function getNumber1(x) {
    //Het rad moest aantal graden draaien, deze waarde werd aan het rad toegekend d.m.v variabele rotation.
    //Variabele rotation is als een parameter aan function getNumber doorgegeven als x.
    //D.m.v Modulus oftewel % (restwaarde berekening) kunnnen we berekenen op welke cijfer/waarde het rad gaat stoppen.
    //Dit gebeurt d.m.v van een if else if.
    x = x % 360;
    if ((x >= 30) && (x <= 89)) {
        document.getElementById('ipNumberRad2').value = "6";
    } else if ((x >= 90) && (x <= 149)) {
        document.getElementById('ipNumberRad2').value = "5";
    } else if ((x >= 150) && (x <= 209)) {
        document.getElementById('ipNumberRad2').value = "4";
    } else if ((x >= 210) && (x <= 269)) {
        document.getElementById('ipNumberRad2').value = "3";
    } else if ((x >= 270) && (x <= 329)) {
        document.getElementById('ipNumberRad2').value = "2";
    } else {
        document.getElementById('ipNumberRad2').value = "1";
    }
	var number2 = document.getElementById('ipNumberRad2').value;
	getallen.push(number2);
}

function addNumber() {
    var uitkomst = parseInt(getallen[0]) + parseInt(getallen[1]);
    alert(uitkomst);
}