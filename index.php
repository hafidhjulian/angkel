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
            <!-- navbar -->
         <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
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

          <!-- Tampilan home   -->
        <div class="container-fluid" id="home">
            <div class="container" id="kartu">
                <div class="row" >
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card kartu1" >
                            <div class="card-body">
                                <h1 style="text-align :center">ANGKEL</h1>
                                <h2 style="text-align :center">Angkutan & Bengkel</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- tampilan Jadwal -->

        <div class="container" id="timeline ">
            <div class="page-header">
                <h1 style="text-align :center"  >Jadwal Servis bus</h1>
            </div>
            <ul class="timeline">
                <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                    <h4 class="timeline-title">Hello</h4>
                    <p></p>
                    </div>
                    <div class="timeline-body">
                    <p></p>
                    </div>
                </div>
                </li>
                <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                    <p></p>
                    </div>
                </div>
                </li>
                <li>
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                    <p></p>
                    </div>
                </div>
                </li>
                <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                    </div>
                    <div class="timeline-body">
                    <p></p>
                    <p></p>
                    </div>
                </div>
                </li>
            </ul>
        </div>

        <!-- TAMPILAN ANGKEL -->
        <div class="container-fluid" id="angkel">
            <div class="container" >
            <h1 style="text-align :center">Angkel</h1>
                <div class="row" >
                    <div class="col center " id="jajal">
                        <div class="card kartu2" style="width:400px">
                                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                        </div>
                    </div>
                        <div class="col center" id="jajal2">
                            <div class="card kartu2" style="width:400px; height:400px;" >
                                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- Tampilan aboutUS -->
        <div class="container-fluid" id="#">
            <div class="container" >
            <h1 style="text-align :center">About US</h1>
                <div class="row" >
                    <div class="col center " id="jajal">
                        <div class="card kartu2" style="width:400px">
                                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                        </div>
                    </div>
                        <div class="col center" id="jajal2">
                            <div class="card kartu2" style="width:400px; height:400px;" >
                                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    
        <!-- Tampilan contact -->

        <div class="container-fluid" id="aboutus">
            <div class="container" id="">
                <div class="row" >
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 style="text-align :center"  >Contacts</h1>
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