var storeIndex = 1;
showStoreDivs(storeIndex);

function plusStoreDivs(n) {
    showStoreDivs(storeIndex += n);
}

function storeDiv(n) {
    showStoreDivs(storeIndex = n);
}

function showStoreDivs(n) {
    var i;
    var x = document.getElementsByClassName("store-content");
    var dots = document.getElementsByClassName("content-slider-button");
    if (n > x.length) {
        storeIndex = 1
    }
    if (n < 1) {
        storeIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" content-active", "");
      }
    x[storeIndex-1].style.display = "block";
    dots[storeIndex-1].className += " content-active";    
}