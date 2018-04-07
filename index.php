<?php

?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>

         <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a>
                    <img src="bird.jpg" alt="logo" style="width:40px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <div class="container">
                    <ul class="navbar-nav pull-xs-right">
                        <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Jadwal</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Angkel</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">AboutUS</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid" id="home">
            <div class="container" id="kartu">
                <div class="row" >
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card" >
                            <div class="card-body">
                                <h1 style="text-align :center">ANGKEL</h1>
                                <h2 style="text-align :center">Angkutan & Bengkel</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
$( document ).ready(function() {
  //Page scrolling
  $('a.navbar-brand, a.nav-link, .footer-nav-link, .tomup').click(function(){
    var $link = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($link.attr('href')).offset().top - 50)
    }, 1250);

  });

  // Highlight the top nav as scrolling occurs
  $('body').scrollspy({
    target: ".navbar",
    offset: 51
  });
});
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
  
}
</script>
</body>
</html>