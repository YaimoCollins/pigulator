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
    document.form.textview.value = getal.substring(0,getal.length - 1);
}