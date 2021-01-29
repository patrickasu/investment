<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-4e685c56-8562-4ac7-a3ac-a5dba31a8bc4"></div>
    <link href="/css/style.css" rel="stylesheet"> 
    <title>PEA | Technology</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <img src="/img/logo.png" class="myimg-fluid" alt="Logo">
    </ul>
    <li style="list-style: none" class="nav-item">
        <a class="nav-link" href="/">Home</a>
    </li>
      <li style="list-style: none" class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li style="list-style: none" class="nav-item">
        <a class="nav-link" href="/services">Services</a>
      </li>
      <li style="list-style: none" class="nav-item">
        <a class="nav-link" href="#">Investment Plan</a>
      </li>
      <li style="list-style: none" class="nav-item">
        <a class="nav-link" href="/contact">Contact Us</a>
      </li>
  </div>
</nav>
    <div id="stage">
        <div id="stage-caption">
            {{-- <h1>We build Web Applications from <br> inception to delivery</h1>
            <p>PEA Technology, We are creative...</p> --}}
            <a href="/contact" class="btn btn-lg learn">LEARN MORE</a>
        </div>
    </div>
       @yield('content')
        @include('includes.footer')
    
    {{-- <footer>
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                        <h3 class="footer-header1">Head Office</h3>
                        <p class="footer-dsc">Accent & Rovers, Adewale Crescent off Badore, Ajah Lagos.</p>
                        <p class="footer-dsc">Email: info@peatechnology.com <br> Contact: 08182256436</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-two">
                        <h3 class="footer-header2">Our Services</h3>
                        <ul class="footer-ul">
                            <li class="footer-li"><a class="footer-link" href="/training">Website Development</a></li>
                            <li class="footer-li"><a class="footer-link" href="http://starrycare.co.uk/">Social Media Marketing</a></li>
                            <li class="footer-li"><a class="footer-link" href="consulting">Mobile App Development</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-three">
                        <h3 class="footer-header3">Follow Us</h3>
                        <p class="footer-dsc">We're on social media and we love you to give us a follow. Connect with us.</p>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-four">
                        <h3 class="footer-header4">Our Newletter</h3>
                        <p class="footer-dsc">Keep up to date on the latest by subscribing to our e-newsletter.</p>
                        <form action="">
                            <input type="email" placeholder="Enter your email">
                            <input class="submit" type="submit" value="subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer-bottom-text"> peatechnology.com © Copyright 2020. All Rights Reserved.</p>
    </footer>  --}}
    

    {{-- @yield('content')
    @include('includes.footer') --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>