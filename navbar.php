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
      background-color: #999;
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
    <img src="imag.png" alt="Logo" id="logo">
    <ul id="navbar-links">
    
      <a href="#"><li class="fab fa-facebook"></li></a>
    
      <a href="#"><li class="fab fa-instagram"></li></a>
      <a href="#"><li class="fab fa-whatsApp"></li></a>
      
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">services</a></li>
      <li><a href="add.php">blog</a></li>
      <li><a href="about.php">about</a></li>
      <li><a href="display.php">display</a></li>
      <li><a href="contact.php">Contact</a></li>
      <a href="#" id="login-btn">Login</a>
      
    </ul>
    </ul>
  </nav>

  <!-- Rest of your HTML content goes here -->

</body>
</html>
