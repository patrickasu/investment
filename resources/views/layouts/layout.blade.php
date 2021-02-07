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

  <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="/"><img style="" src="/img/vicns.jpg" class="logo" alt="Company logo"></a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item">
                    <a class="nav-link" href="">About us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="">Investment</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/recruitment">Sevices</a>
                    </li>
                    <li class="nav-item">
                    <span style="display: inline-block"><a class="nav-link" href="/contact">contact Us</a></span><i style="color: #2db3cb" class="fas fa-cloud-upload-alt"></i>
                    </li>
                    
                    {{-- <li class="nav-item">
                    <a class="nav-link" href="/consulting">About us</a>
                    </li> --}}
                    <li class="nav-item">
                    <a href="/register"><i style="background-color: #2db3cb; margin-right: 10px; margin-left: 100px; color: #fff; border-radius: 30px; padding-right: 30px; padding-left: 30px; padding-top: 15px; padding-bottom: 15px" class="far fa-user-circle"> Register</i></a>
                    {{-- <a class="nav-link" href="/outsourcing">Register</a> --}}
                    </li>
                    <li class="nav-item">
                    <a href="/login"><i style="background-color: #e6922e; color: #fff; border-radius: 30px; padding-right: 30px; padding-left: 30px; padding-top: 15px; padding-bottom: 15px" class="fas fa-unlock"> Login</i></a> 
                        {{-- <a class="nav-link" href="/login">Login</a> --}}
                    </li>
                </ul>
            </div>
        </div>  
    </nav>

    <div id="stage">
        <div id="stage-caption">
            <h1>Lorem ipsum dolor sit amet <br> ante ipsum primis</h1>
            <p>Nulla lacinia a tortor sed gravida...</p>
            <a href="/login" class="btn btn-lg learn">INVEST NOW</a>
        </div>
    </div>
       @yield('content')
        @include('includes.footer')
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>