function berekenFibo(){
	var input = parseFloat(document.getElementById("getalInput_Fibo").value);
	var vorigGetal = 0;
	var huidigGetal = 1;
	document.getElementById("fibo_Output").innerHTML = "0" + "<br>" + "1" + "<br>";
	
	var uitkomst;
	
	for(var i = 0; i < input; i++) {
		uitkomst = vorigGetal + huidigGetal;
		vorigGetal = huidigGetal;
		huidigGetal = uitkomst;
		document.getElementById("fibo_Output").innerHTML += uitkomst  + "<br>";
		document.getElementById("bubble").style.display = "block";
		document.getElementById("rekengir").innerHTML = "img/happygir.png"
	}
	
}