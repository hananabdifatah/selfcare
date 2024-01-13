<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    nav {
      background-color: white; /* Bootstrap primary color */
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
    }

    .logo img {
      max-height: 100px;
    }

    ul {
      list-style: none;
      display: flex;
      margin: 0;
      padding: 0;
    }

    li {
      margin: 0 15px;
    }

    a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }
  </style>
  <title>Flexbox Navbar with Bootstrap</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark p-3 mb-2 bg-secondary text-white">
    <a href="#" class="navbar-brand logo">
      <img src="imag.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Content goes here -->
  <div style="padding: 20px;">
    <h1>Welcome to our website!</h1>
    <p>This is a simple example of a flexbox navbar with Bootstrap styling.</p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
