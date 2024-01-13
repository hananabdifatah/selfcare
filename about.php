<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us -  Skincare </title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      background-color: #f8f9fa;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      color: #007bff;
    }

    section {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 50px;
      background-color: #ffffff;
    }

    section img {
      max-width: 700px;
      border-radius: 70px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    section p {
      max-width: 500px;
      text-align: justify;
    }
  </style>
</head>
<body>
<div class="row">
    <?php
    include("nav.html");
    ?>
</div>
  

  <section>
    <img src="images.jpeg" alt="About Us Image">
    <p>
      Welcome to Your Skincare , where beauty meets science! We are passionate about providing high-quality skincare products that nourish and enhance your skin's natural beauty.
      <br><br>
      Our journey began with a simple belief – everyone deserves healthy and radiant skin. We combine the latest advancements in skincare technology with natural ingredients to create products that cater to all skin types.
      <br><br>
      At Your Skincare , we prioritize transparency and authenticity. We believe in empowering our customers to make informed choices about their skincare routine. Each product is crafted with care, free from harmful chemicals, and cruelty-free.
      <br><br>
      Whether you're looking for effective cleansers, rejuvenating serums, or soothing moisturizers, we have something for everyone. Join us on our mission to transform your skincare routine and embrace the beauty that lies within.
    </p>
  </section>
    <div class="row">
    
      <?php
     include("footer.html");
     ?>
              
    </div>
</body>
</html>
