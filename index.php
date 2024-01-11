<html>
    <head>
        <title>the secret to beauty</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <div class="row">
  
  <?php
  include("nav.html");
  ?>
  </div>
   
<?php

function displayKampalaTimeAndDate() {
  // Set the timezone to Kampala, Uganda
  date_default_timezone_set('Africa/Kampala');

  // Format the current date and time
  $currentDateTime = date('Y-m-d H:i:s');

  // Get the timezone abbreviation
  $timezone = date('T');

  // Output the formatted date, time, and timezone
  echo "$currentDateTime $timezone";
}

// Call the function to display the current time and date in Kampala
displayKampalaTimeAndDate();
?>
  <div class="row">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
<center>
        <div class="carousel-inner bg-secondary">
          <div class="carousel-item active">
            <p class="text-bg-danger display-6"><h2>Hello!</h2></p>
            <img src="img1.jpeg" alt="GFG" width="700" height="500" class="d-block w-50" alt="..." style>
          </div>
          <div class="carousel-item">
            <p class="text-bg-danger display-6">Welcome to  skincare website!</p>
            <img src="img2.jpeg"  width="400" height="500" class="d-block w-50" alt="...">
          </div>
          <div class="carousel-item">
            <p class="text-bg-danger display-6">my name is Hanan i am  passionate about promoting </p>
            <img src="img4.jpeg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
          </div>
          <div class="carousel-item">
            <p class="text-bg-danger display-6">healthy and radiant skin</p>
            <img src="images.jpeg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        
      </div>
      </center>

</div>
</div> 
        <script src="js/bootstrap.min.js"></script>
      
    </body>
</html>