<html>
    <head>
        <title>add</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
        
            <div class="container">
                <div class="row">
                    <?php
                    include("nav.htm");
                    ?>
                </div>
                <h2>Submit an Item</h2>

                <form action="/submit" method="post">
                    <label for="itemName">Item Name:</label>
                    <input type="text" id="itemName" name="itemName" required>
            
                    <br>
            
                    
            
                    <input type="submit" value="Submit">
                </form>
            
              <script src="js/bootstrap.min.js"></script>
       
    </body>
</html>