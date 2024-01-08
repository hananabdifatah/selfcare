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

  <!-- Rest of your HTML content goes here -->

</body>
</html>