<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    nav {
      background-color: #333;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #logo {
      max-width: 100px;
      height: auto;
    }

    #navbar-links {
      display: flex;
      gap: 20px;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    #navbar-links li {
      color: #fff;
    }
  </style>
</head>
<body>

  <nav>
    <img src="path/to/your/logo.png" alt="Logo" id="logo">
    <ul id="navbar-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <div class="row">
    <h2 class="display-6 taxt-center" style="background-color:white"></h2>
    <?php
      require_once("connection.php");
      $query="SELECT * FROM products";
      $result=mysqli_query($con,$query);
      while($row= mysqli_fetch_assoc($result))
      {
    ?>
  <div class="col-md-4 md-4">
     <div class="card" style="background-color:lightblue;">
      <div class="card-header" style="background-color:pink;">
    

      <div class="card-body">
        <p class="card-taxt"><?php echo $row['ID'];?></p>
      </div>

      <div class="card-body">
        <p class="card-taxt"><?php echo $row['productname'];?></p>
      </div>

      <div class="card-body">
        <p class="card-taxt"><?php echo $row['skintype'];?></p>
      </div>

      <div class="card-body">
        <p class="card-taxt"><?php echo $row['price'];?></p>
      </div>

      <div class="card-body">
        <p class="card-taxt"><?php echo $row['productdescription'];?></p>
      </div>
   </div>
  </div>
    <?php}?>
   
  </div>
  
  <!-- Rest of your HTML content goes here -->

</body>
</html>