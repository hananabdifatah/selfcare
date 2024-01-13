<?php
require_once("connection.php");
$query="SELECT*FROM products" ;
$result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>services</title>
</head>
<body class="bg-dark">
    <div class="row">
    <?php
    include("nav.html");
    ?>
    </div> 
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-10">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">products</h2>

                    </div>
                    <div class="card-body">
                        <table class="table table-border text-center">
                            <tr class="bg-dark text-white">
                                <td> ID</td>
                                <td>productname</td>
                                <td>skintyp</td>
                                <td>price</td>
                                <td>productdescription</td>
                                <td>action</td>
                            </tr>
                            <?php
                                while($row = mysqli_fetch_assoc($result))
                                {
                                ?>
                            <tr>
                                
                               <td><?php echo $row["ID"];?></td>
                               <td><?php echo $row["productname"];?></td>
                               <td><?php echo $row["skintype"];?></td>
                               <td><?php echo $row["price"];?></td>
                               <td><?php echo $row["productdescription"];?></td>
                               
                            </tr>
                                <?php
                                }
                                ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>