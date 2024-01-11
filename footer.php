<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Website Footer</title>
    <script src="https:/kit.fontawesome.com/1165876da6.js"crossorigin="anonymous"></script>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family:Arial,Helvetica, sans-serif;
        font-size: 16px;
        color:white;

    }
    footer{
        background: #343434;
        padding-top:50px;
    }
    .container{
        width: 1140px;
        margin:auto;
        display:flex;
        justify-content:center;

    }
    .footer-content{
        width:33.3%

    }
    h3{
        font-size:28px;
        margin-bottom:15px;
        text-align:center
    }
    .footer-content p{
        width: 190px;
        margin: auto;
        padding: 10px;
    }
    .footer-content ul{
        text-align:center;

    }
    .list{
        padding: 0;

    }
    .list li{
        width:auto;
        text-align:center;
        list-style-type:none ;
        padding: 7px;
        position: relative;
    }
    .list li::before{
        content: '';
        position:absolute;
        transform: translate(-50%,-50%);
        left:50%;
        top:100%;
        width: 0;
        height:2px;
        background:#f18930;
        transition-duration:.5s;

    }
    
    .list li:hover::before{
        width: 70px;
        
    }

    .social-icons{
        text-align:center;
        padding: 0;
    }
    .social-icons li{
        display: inline-block;
        text-align:center;
        padding: 5px;
    }
    .social-icons i{
        color:rgb(232, 232, 239);
        font-size:25px;

    }
    a:hover{
        color:#f18930;
    }
    .social-icons i:hover{
        color:#f18930;
    }
    .bottom-bar{
        background:#f18930;
        text-align:center;
        padding: 10px 0;
        margin-top:50px;
    }
    .bottom-bar p{
        color:#343434;
        margin: 0;
        font-size:16px;
        padding: 7px;
    }
</style>
<body>
    
<Footer>
    <div class="container">
        <div class="footer-content">
            <h3>contact us</h3>
            <p>Email:cabdifatahhanan.@gmail.com</p>
            <p>phone:0774723274</p>
            <p>address:hoima road, Kampala, Uganda</p>
        </div>
        <div class="footer-content">
            <h3>links</h3>
            <ul class="list">
            <li><a href="index.php">Home</a></li>
             <li><a href="services.php">services</a></li>
            <li><a href="add.php">blog</a></li>
            <li><a href="about.php">about</a></li>
             <li><a href="display.php">display</a></li>
             <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-content">
            <h3>follow us</h3>
            <ul class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
    
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-whatsApp"></i></a>
            </ul>
        </div>
    </div>
    <div class="bottom-bar">
        <p>&copy;2024 our secret Secret Beauty. All right reserved </p>
    </div>
</Footer>
</body>