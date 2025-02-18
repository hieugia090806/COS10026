<?php
    // Two given variables
    $x = 20;
    $y = 5;
    //Sum of two given numbers
    echo("Sum of two given numbers are: ". $x + $y. "\n");
    //Difference of two given numbers
    echo("Diiference of two given numbers are: ". $x + $y. "\n");
    //Product of two given numbers
    echo("Product of two given numbers are: ". $x * $y. "\n");
    //Division of two given numbers
    echo("Division of two given numbers are: ". $x / $y. "\n");
    //Modulus (remainder) of two given numbers
    echo("Modulus of two given numbers are: ". $x % $y. "\n");
    //Exponential of two given numbers
    echo("Exponential of two given numbers are: ". $x ** $y. "\n"); //This case means 10^5
    //Increment of a number
    echo("Increment of a number is: ". ++$x. "\n");
    //Decrement of a number
    echo("Decrement of a number is: ". --$x. "\n"); //This case means 19
    //Compare two given numbers
    var_dump($x == $y);  // Equal to? Output: false
    var_dump($x != $y);  // Not equal to? Output: true
    var_dump($x <= $y);  // Not equal to? Output: false
    var_dump($x >= $y);  // Not equal to? Output: true
    var_dump($x < $y);  // Not equal to? Output: false
    var_dump($x > $y);  // Not equal to? Output: true
    //Logical operators
    $a = true;
    $b = false;
    var_dump($a and $b);  // And operator
    var_dump($a or $b);  // Or operator
    var_dump($a xor $b);  // Xor operator
?>