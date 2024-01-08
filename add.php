<html>
    <head>
        <title>add</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
        
         <div class="container">
            <div class="row">
            <?php
              include("nav.htm");
              ?>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h2>add Product</h2>
                    <form action="processproduct.php" method="POST">
                    <div class="form-group">
                    <label for="text">productname</label>
                        <input type="text" name="productname" class="form- control">
                    </div>
                    <div class="form-group">
                    <label for="text">skintype</label>
                        <input type="text" name="skintype" class="form- control">
                    </div>
                    <div class="form-group">
                    <label for="number">price</label>
                        <input type="number" name="price" class="form- control">
                    </div>
                    <div class="form-group">
                        <label for="text">product description</label>
                        <input type="text" name="productdescription" class="form- control">
                    </div>
                    <input type="submit" class="btn btn-primary"/>
                    </form>
                </div>

            </div>
         </div>
              
              <script src="js/bootstrap.min.js"></script>
       
    </body>
</html>