<html>
    <head>
        <title>the secret to beauty</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php
  include("nav.html");
  ?>
   
<?php

function displayKampalaTimeAndDate() {
  // Set the timezone to Kampala, Uganda
  date_default_timezone_set('Africa/Kampala');

  // Format the current date and time
  $currentDateTime = date('Y-m-d H:i:s');

  // Get the timezone abbreviation
  $timezone = date('T');

  // Output the formatted date, time, and timezone
  echo "Current Time and Date in Kampala, Uganda<br>: $currentDateTime $timezone";
}

// Call the function to display the current time and date in Kampala
displayKampalaTimeAndDate();
?>
  
            
        <script src="js/bootstrap.min.js"></script>
      
    </body>
</html>