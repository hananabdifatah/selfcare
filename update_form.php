<html>
    <head>
        <title>add</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    <?php
      require_once("connection.php");
      ?>
         <div class="container">
           
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h2>update info</h2>
                   <?php
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                require_once("connection.php");

                $query ="SELECT * FROM product WHERE id= ?";
                $stmt =mysqli_prepare($con, $query);
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $result =mysqli_stmt_get_result($stmt);
                $data= mysqli_fetch_assoc($result);

                    if($data){
            
              ?>
                    <form action="processupdate.php" method="POST">
                        <input typle="hidden" name="ID" value="<?php echo $data[ID];?>">
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
                  <?php }?>
            <?php}?>
                </div>

            </div>
         </div>
              
              <script src="js/bootstrap.min.js"></script>
       
    </body>
</html>