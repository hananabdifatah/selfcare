<?php
$host="localhost";
$user="root";
$password="";
$db="SecretBeauty";
$con=mysqli_connect($host, $user, $password, $db);

   if($con)
   {
    echo" connection successfully to database";
    }

else
{
     echo" connection o database failed";
}



     ?>