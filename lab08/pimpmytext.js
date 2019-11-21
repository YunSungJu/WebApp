

function aatt() {
    alert("Hello, world!");
}

function fontsize() {
    var area = document.getElementById("area");
    if (area.style.fontSize == ""){
        area.style.fontSize = "12pt";
    } else {
        area.style.fontSize = parseInt(area.style.fontSize)+2+"pt";
    }
}

function timer() {
    var myVar = setInterval(fontsize, 500);
}

function bold(params) {
    var area = document.getElementById("area");
    var chk = document.getElementById("chk");

    if (chk.checked) {
        area.style.fontWeight = "bold";
        area.style.color = "green";
        area.style.textDecoration = "underline";
    } else {
        area.style.fontWeight = "none";
        area.style.color = "black";
        area.style.textDecoration = "none";
    }
}

function upper() {
    var area = document.getElementById("area");
    var string = area.value;
    var array = string.split(".");

    for (var i=0; i<array.length-1; i++) {
        array[i] = array[i].toUpperCase()+" -izzle."
    }
    array[array.length-1] = array[array.length-1].toUpperCase(); 

    var result = "";
    for (var i=0; i<array.length; i++) {
        result = result + array[i];
    }
    
    area.value = result;
}

