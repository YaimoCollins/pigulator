function berekenPrime(){
	var n = parseFloat(document.getElementById("getalinput_Prime").value);
	document.getElementById("bubble").style.display = "block";
    
    var array = [], upperLimit = Math.sqrt(n);

    for (var i = 0; i < n; i++) {
        array.push(true);
    }

    for (var i = 2; i <= upperLimit; i++) {
        if (array[i]) {
            for (var j = i * i; j < n; j += i) {
                array[j] = false;
            }
        }
    }

    for (var i = 2; i < n; i++) {
        if(array[i]) {
           document.getElementById("prime_Output").innerHTML += i + "<br>"; 
        }
    }
		
}