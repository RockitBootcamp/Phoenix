<?php

include 'initialize.php';

?>


<!doctype html>
<html lang="en">
<head>

  <link rel="stylesheet" href="nivo-slider.css" media="screen">
  <link rel="stylesheet" href="style.css">
  <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
  <meta charset="UTF-8">
  <title>Inside Job | What It's REALLY Like on the Inside </title>
 
</head>

<body>


<?php include 'header.php';?>

<div class="top-form">
  <form action="companies.php" method="GET">
  <input type="text" name="search" class="top-box" placeholder="Find a company rating" size="80">
  <button type="submit">Submit</button>
  </form>
</div>


<div class="slider-wrapper futurico-theme">
 
    <div id="slider" class="slides">
  
        <img src="img/slide1.jpg" alt="">
 
        <img src="img/slide2.jpg" alt="">
 
        <img src="img/slide3.jpg" alt="">
 
        <img src="img/slide4.jpg" alt="">

        <img src="img/slide5.jpg" alt="">
 
    </div>
 
</div>

<div class="clearfix"><br></div>
  
<div class="main">
  <div class="featured">

              <div class="prospects">
                <h2>Prospects</h2>
                <form action="companies.php" method="GET">
                  <input type="text" name="search" placeholder="Find a company rating" size="40"><br>
                  <button type="submit">Submit</button>
                </form>
                
              </div>
            
              <div class="employers">
                <h2>Employers</h2>
                <button class="employers-button" onclick="window.location.href='companies.php'">See your ratings</button>
                
              </div>
            
              <div class="employees">
                <h2>Employee</h2>
                <button class="employees-button" onclick="window.location.href='survey.php'">Rate a company</button>
                </div>

  </div>

</div>
 
<footer>
</footer>

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="jquery.nivo.slider.pack.js"></script>
  <script src="slide.js"></script>

</body>
</html>



 
