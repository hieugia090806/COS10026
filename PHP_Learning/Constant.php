<?php
    //Create a PHP constant
    define("GREETING", "Welcome to W3Schools.com!". "\n");
    echo GREETING; //This will output "Welcome to W3Schools.com!" and delete the "GREETING".
    //PHP const Keyword
    const MYCAR = "Volvo";
    echo MYCAR."\n";
    //PHP Arrays as Constants
    define("cars", [
        "Alfa Romeo", 
        "BMW", 
        "Toyota"]);
    echo cars[0]."\n";
    //Constants are Global
    define("GREETING", "Welcome to W3Schools.com!");
    function myTest() {
        echo GREETING;
    }
    myTest();
?>