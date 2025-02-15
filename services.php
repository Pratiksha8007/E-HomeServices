<?php
include("header.php");
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
    </ul>

  </div>

</nav>
?>