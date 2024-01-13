<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rGc2f1p8k0I3rDbTnhY3bGZVr5wOjxGfjTWScE+3p3x6PbTq55FVnYquUujU1qLh" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 20px;
    }

    .product-card {
      max-width: 300px;
      margin: auto;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    .product-card img {
      max-width: 100%;
      height: auto;
      border-bottom: 1px solid #dee2e6;
    }

    .product-card-body {
      padding: 20px;
    }

    .product-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-description {
      color: #6c757d;
      margin-bottom: 20px;
    }

    .product-price {
      color: #007bff;
      font-size: 1.2rem;
      font-weight: bold;
    }

    #productCarousel {
      max-width: 800px;
      margin: auto;
    }
  </style>
  <title>Skincare Product Cards Carousel</title>
</head>
<body>
<div class="container">
  <div class="row">
    <?php
    include("nav.html");
    ?>
  </div>
  <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="product-card">
          <img src="IMG11.jpg" class="d-block w-100" alt="Product 1">
          <div class="product-card-body">
            <div class="product-title">Cerave Foaming Facial Cleanser</div>
            <div class="product-description">FOR NORMAL TO OILY SKIN, OIL CONTROL
            froaming Facial Cleanser is ideal for removing excess oil, dirt, and makeup.</div>
            <div class="product-price">USH 130,000</div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="product-card">
          <img src="IMG-10.jpg.webp" class="d-block w-100" alt="Product 2">
          <div class="product-card-body">
            <div class="product-title">Cosrx Advanced Snail 92 All In One Cream</div>
            <div class="product-description">Cosrx Advanced Snail 92 All In One Cream repairs and soothes irritated, sensitized skin after breakouts. A rich gel-type cream absorbs instantly into the skin with a full of nourishment while leaving your skin feeling fresh and comfortable.</div>
            <div class="product-price">USH 130,000  </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="product-card">
          <img src="IMG12.webp" class="d-block w-100" alt="Product 2">
          <div class="product-card-body">
            <div class="product-title">Round Lab Birch Juice Moisturizing Toner</div>
            <div class="product-description">As such, ROUND LAB creates healthy cosmetics that can improve skin, 
              with fresh ingredients that are domestically grown and fit pleasantly to our skin.
              It is an ampoule-type product that reminds you of birch sap,
               and it is absorbed smoothly, helping to moisturize your skin without stickiness</div>
            <div class="product-price">USH 150,000  </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="product-card">
          <img src="IMG-1.jpg.webp" class="d-block w-100" alt="Product 2">
          <div class="product-card-body">
            <div class="product-title">The Ordinary Alpha Arbutin 2% + HA </div>

            <div class="product-description">The Ordinary Alpha Arbutin 2% + HA is a water-based serum specifically 
              designed to target uneven skin tone and visibly improve pigmentation.</div>
            <div class="product-price">USH 80,000  </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="product-card">
          <img src="IMG-16jpg.webp" class="d-block w-100" alt="Product 2">
          <div class="product-card-body">
            <div class="product-title">The Ordinary Hyaluronic Acid 2% + B5</div>
            <div class="product-description">The Ordinary Hyaluronic Acid 2% + B5 is a water-based formula combining low-,
               medium- and high-molecular-weight hyaluronic acid molecules and a next-generation HA crosspolymer
                to support hydration to multiple layers of your skin.
                </div>
                <div class="product-price">USH 70,000  </div>
        </div>
      </div></div>
            
          </div>
        </div>
      </div>
     </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-8IwQlT/XZRztE9x5nJ1PTs5zAzGK3BL/HA4untz1U08nY2rsPzVxAKFXD8N92PzQ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy8Q1TIScWV6H5T/J2jzw5jNPZSFM4ca" crossorigin="anonymous"></script>
<div class="row">
  <?php 
  include("footer.html");
  ?>
</div>
</div>
  
</body>
</html>
