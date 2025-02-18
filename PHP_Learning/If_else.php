<?php
    //Basic if else statement
    if (5>3) {
        echo "5 is greater than 3"."\n";
    } else {
        echo "5 is not greater than 3"."\n";
    }

    $a = 5;
    if ($a == 5 and $a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) { //This case || means and
        echo "a is equal to 5"."\n";
        echo "$a is a number between 2 and 7"."\n";
    } else {
        echo "a is not equal to 5"."\n";
    }

    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning!"."\n";
    } elseif ($t < "20") {
        echo "Have a good day!"."\n";
    } else {
        echo "Have a good night!"."\n";
    } 

    $a = 13;    
    if ($a > 10) {
        echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
}
?>