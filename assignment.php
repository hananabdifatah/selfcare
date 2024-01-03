<?php
function greeting($name) {
    $message = "How are you, $name?";
    echo $message;
}
// Call the function
greeting("John");

define("CONSTANT_AGE", 25);

// Function to display constant and variable age
function bio($variableAge) {
    echo "Constant Age: " . CONSTANT_AGE . "<br>";
    echo "Variable Age: " . $variableAge;
}

// Call the function with a variable age
bio(30);
?>