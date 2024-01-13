<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Autoplay Carousel with Content Beside</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }

    .carousel-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }

    .carousel {
      max-width: 100%;
      margin-right: 100px;
    }
    .carousel-item {
      object-fit: cover;
      height: 100%;
      width: 100%;
    }
    .content {
      flex-grow: 1;
    }
  </style>
</head>
<body>

  <div class="carousel-container">
    <div id="autoplayCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <center>
        <div class="carousel-item active">
          <img src="img1.jpeg" class="d-block w-300" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="img2.jpeg" class="d-block w-500" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="img3.jpeg" class="d-block w-1300" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="img4.jpeg" class="d-block w-300" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="ima.jpeg" class="d-block w-300" alt="Slide 2">
        </div>
        <!-- Add more slides as needed -->
      </div>
    </div>

    <div class="content">
      <h2>Welcome to Your Skincare Haven</h2>
      <p>Discover the secret to radiant and healthy skin with our premium skincare products. We offer a range of solutions tailored to your skin's unique needs. Embrace the beauty that lies within!</p>
      <a href="#" class="btn btn-primary">Explore Now</a>
    </div>
  </div>
  </center>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Activate the carousel with autoplay
    $('#autoplayCarousel').carousel({
      interval: 3000, // Set the interval for autoplay in milliseconds (e.g., 3000 = 3 seconds)
      pause: false // Set to 'false' to allow continuous autoplay
    });
  </script>

</body>
</html>
