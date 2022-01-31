function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var lightboxIndex = 1;
  showSlides(lightboxIndex);
  
  function plusSlides(n) {
    showSlides(lightboxIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(lightboxIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("wmns-demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {lightboxIndex = 1}
    if (n < 1) {lightboxIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[lightboxIndex-1].style.display = "block";
    dots[lightboxIndex-1].className += " active";
    captionText.innerHTML = dots[lightboxIndex-1].alt;
  }