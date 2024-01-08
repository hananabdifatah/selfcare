<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy8Q1TIScWV6H5T/J2jzw5jNPZSFM4ca" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xYUqIk5M1JH0R5tq7K5wz3I6Y+X9j9aFiiKG8Civ+GJS9AtYzvRcFeqqv2beVpRKyugLc5jxXCH7gpRwCt0hv/w==" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
    }

    .container {
      margin-top: 50px;
    }

    h2 {
      color: #007bff;
    }

    .contact-info {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-info i {
      font-size: 2em;
      margin-right: 10px;
      color: #007bff;
    }

    .contact-form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
  <title>Contact Us</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <!-- Contact Information Column -->
      <div class="col-md-6">
        <h2 class="text-center mb-4">Contact Information</h2>
        <div class="contact-info">
          <div class="mb-3">
            <i class="fas fa-map-marker-alt"></i>
            123 Street, City, Country
          </div>
          <div class="mb-3">
            <i class="fas fa-phone"></i>
            +1 234 567 890
          </div>
          <div class="mb-3">
            <i class="fas fa-envelope"></i>
            info@example.com
          </div>
        </div>
      </div>

      <!-- Registration Form Column -->
      <div class="col-md-6">
        <h2 class="text-center mb-4">Registration Form</h2>
        <form class="contact-form">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIEX16r+uaU/8j2e3Hm0bE5rtHTtn8URC3z5qp5H1NQnqQb3jDPwF9U" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy8Q1TIScWV6H5T/J2jzw5jNPZSFM4ca" crossorigin="anonymous"></script>
</body>
</html>
