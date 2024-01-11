<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Profile</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-wrapper {
            display: flex;
            max-width: 800px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .profile-image {
            flex: 1;
            background: url('.jpg') center/cover no-repeat;
        }

        .profile-info {
            flex: 1;
            padding: 30px;
            box-sizing: border-box;
        }

        h1 {
            color: #333333;
            margin-bottom: 10px;
        }

        p {
            color: #666666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-wrapper">
            <div class="profile-image"></div>
            <div class="profile-info">
                <h1>Your Name</h1>
                <p>
                    Welcome to my skincare profile! I am passionate about promoting healthy and radiant skin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non nulla vel quam accumsan volutpat. Nulla facilisi. Proin volutpat neque vel libero tincidunt, ac sagittis odio cursus. Integer euismod orci et tellus cursus, vel hendrerit justo volutpat.
                </p>
                <p>
                    Follow along for skincare tips, product recommendations, and more. Let's embark on a journey towards beautiful and glowing skin together!
                </p>
            </div>
        </div>
    </div>
</body>
</html>
