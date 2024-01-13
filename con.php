<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        #slider-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            overflow: hidden;
        }

        #image-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .content-container {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .content {
            flex: 1;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Website</h1>
    </header>

    <div id="slider-container">
        <div id="image-slider">
            <div class="slide"><img src="img.jpeg" alt="Slide 1"></div>
            <div class="slide"><img src="img2.jpeg" alt="Slide 2"></div>
            <div class="slide"><img src="img3.jpeg" alt="Slide 3"></div>
            <!-- Add more slides as needed -->
        </div>
    </div>

    <div class="content-container">
        <div class="content">
            <h2>Welcome to Our Website</h2>
            <p>Your introductory content goes here.</p>
        </div>
        <!-- Add more content sections as needed -->
    </div>

    <script>
        const slider = document.getElementById('image-slider');
        let currentIndex = 0;

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slider.children.length;
            updateSlider();
        }

        function updateSlider() {
            const translateValue = -currentIndex * 100 + '%';
            slider.style.transform = 'translateX(' + translateValue + ')';
        }

        setInterval(nextSlide, 5000); // Change slide every 5 seconds
    </script>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        #slider-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            overflow: hidden;
        }

        #image-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .content-container {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .content {
            flex: 1;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Website</h1>
    </header>

    <div id="slider-container">
        <div id="image-slider">
            <div class="slide"><img src="image1.jpg" alt="Slide 1"></div>
            <div class="slide"><img src="image2.jpg" alt="Slide 2"></div>
            <div class="slide"><img src="image3.jpg" alt="Slide 3"></div>
            <!-- Add more slides as needed -->
        </div>
    </div>

    <div class="content-container">
        <div class="content">
            <h2>Welcome to Our Website</h2>
            <p>Your introductory content goes here.</p>
        </div>
        <!-- Add more content sections as needed -->
    </div>

    <script>
        const slider = document.getElementById('image-slider');
        let currentIndex = 0;

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slider.children.length;
            updateSlider();
        }

        function updateSlider() {
            const translateValue = -currentIndex * 100 + '%';
            slider.style.transform = 'translateX(' + translateValue + ')';
        }

        setInterval(nextSlide, 5000); // Change slide every 5 seconds
    </script>
</body>
</html>
Hello!
my name is Hanan i am  passionate about promoting
healthy and radiant skin
</body>
</html>
