
window.onload =function () {
    carousel();
};

function signIn() {
    var x = document.getElementById("signIn");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}


function signIn1() {
    document.getElementById("signUp").display = "none";
    document.getElementById("signIn").click();
}

function signUp() {
    var y = document.getElementById("signUp");
    if (y.style.display === "block") {
        y.style.display = "none";
    } else {
        y.style.display = "block";
    }
}

var myIndex = 0;

function carousel() {
    var i;
    var x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

