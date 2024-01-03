<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>writing php function with parameters</title>
</head>
<body>
    <?php
    function addfunction($num1,$num2){
        $sum = $num1 + $num2;
        echo "Sum of the two numbers is : $sum";
     }
     
     addFunction(10, 20);
    ?>
</body>
</html>