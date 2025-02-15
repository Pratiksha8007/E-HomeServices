<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-centre">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 1rem;"></div>
    </div>
    <!-- Spinner End -->
 <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
<img src=images\instagram.png height=20% width=20px>
<img src=images\twitt.png height=20% width=20px>
<img src=images\whatsapp.png height=20% width=20px>
<img src=images\facebook.png height=20% width=20px>
                    
                </div>
            </div>
            <div class="col-lg-4 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-right text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>
<b><p align="right">Call Us:</span>
                    <span>.                             +917517723376/7058925207</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HomeServices</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="services.php?servicename=plumber">Plumber</a></li>
          <li><a href="services.php?servicename=electrician">Electrician</a></li>
          <li><a href="services.php?servicename=refridgerator repair">Refridgerator Repair</a></li>
          <li><a href="services.php?servicename=painter">painter</a></li>
          <li><a href="services.php?servicename=carpenter">Carpenter</a></li>
          <li><a href="services.php?servicename=geyser">Geyser</a></li>
          <li><a href="services.php?servicename=home cleaning">Home Cleaning</a></li>
          <li><a href="services.php?servicename=washingmachine repair">WashingMachine Repair</a></li>
          <li><a href="services.php?servicename=gardening">Gardening</a></li>

     </ul>

      </li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul> <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="admlogin.php"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
    </ul>

  </div>

</nav>


  
<div class="container">


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
 <img src="images\9s.png" width=100% height=50px>

    </div>

    <div class="item">
      <img src="images\6s.png" width=100% height=80px>
    </div>

    <div class="item">
      <img src="images\8s.png" width=100% height=80px>
    </div>
<div class="item">
      <img src="images\s.png" width=100% height=80px>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

