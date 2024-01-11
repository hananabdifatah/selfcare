<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
require_once("connection.php");
$query= "UPDATE products SET productname=?,skintype=?,price=?,productdescription=? WHERE ID=?";
$statement=mysqli_prepare($con,$query);

mysqli_stmt_bind_param($statement,"ssss",$product,$type,$pri,$descrip);
$product=$_POST["productname"];
$type=$_POST["skintype"];
$pri=$_POST["price"];
$descrip=$_POST["productdescription"];
mysqli_stmt_execute($statement);
header("Location:services.php");

?>