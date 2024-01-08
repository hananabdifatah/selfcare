<?php
require_once("connection.php");

$product=$_POST["productname"];
$type=$_POST["skintype"];
$pri=$_POST["price"];
$descrip=$_POST["productdescription"];
    
$query="INSERT INTO products (productname,skintype,price,productdescription) VALUE(?,?,?,?)";
$statement=mysqli_prepare($con,$query);

mysqli_stmt_bind_param($statement,"ssss",$product,$type,$pri,$descrip);
mysqli_stmt_execute($statement);
echo "data submitted successfully";
?>