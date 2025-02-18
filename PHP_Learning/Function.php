<?php
    //Simple function
    function greet() {
        echo "Hello, World!"."\n";
    }   
    greet(); // Calling the function

    //Function with parameters
    function greet2($name) {
        echo "Hello, " . $name . "!"."\n";
    }
    greet2("Alice");

    //Function with Default Parameter Value
    function greetByName($name = "Guest") {
        echo "Hello, " . $name . "!"."\n";
    }
    greetByName();// Output: Hello, Guest! (uses default)

    // Function with Return Value:
    function add($a, $b) {
        return $a + $b."\n";
    }
    $sum = add(5, 3);
    echo "The sum is: " . $sum . "\n"; // Output: The sum is: 8

    //Function with multiple return values
    function getPersonDetails($name, $age) {
        return array("name" => $name, "age" => $age);
    }
    $person = getPersonDetails("David", 30);
    echo "Name: " . $person["name"] . ", Age: " . $person["age"] . "\n"; // Output: Name: David, Age: 30
    list($name, $age) = array_values(getPersonDetails("Eve", 25)); // array_values gets just the values
    echo "Name: " . $name . ", Age: " . $age . "\n"; // Output: Name: Eve, Age: 25

    //Variable Length Argument Lists
    function sumAll() {
        $args = func_get_args(); // Gets all arguments as an array
        $sum = 0;
        foreach ($args as $arg) {
            $sum += $arg;
        }
        return $sum;
    }
    echo sumAll(1, 2, 3) . "\n";       // Output: 6
    echo sumAll(1, 2, 3, 4, 5) . "\n"; // Output: 15

    //Passing Arguments by Reference:
    function incrementByRef(&$num) {  // The & makes it a reference
        $num++;
    }
    $value = 10;
    incrementByRef($value);
    echo $value . "\n"; // Output: 11 (value was changed by the function)
?>