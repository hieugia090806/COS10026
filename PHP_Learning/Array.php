<?php
    $colors = array("red", "green", "blue");

    // Accessing elements:
    echo $colors[0] . "\n"; // Output: red
    echo $colors[1] . "<\n>"; // Output: green
    echo $colors[2] . "<\n>"; // Output: blue

    // Adding elements:
    $colors[] = "yellow"; // Adds "yellow" to the end
    $colors[4] = "purple"; // Adds "purple" at index 4

    // Displaying the array (for debugging):
    print_r($colors);  // Output: Array ( [0] => red [1] => green [2] => blue [3] => yellow [4] => purple )

    // Looping through the array:
    for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "\n";
    }

    // Another way to loop:
    foreach ($colors as $color) {
        echo $color . "\n";
    }

    $person = array(
        "name" => "John Doe",
        "age" => 30,
        "city" => "New York"
    );
    
    // Accessing elements:
    echo $person["name"] . "\n"; // Output: John Doe
    echo $person["age"] . "\n";  // Output: 30
    
    // Adding elements:
    $person["occupation"] = "Engineer";
    
    // Looping through the array:
    foreach ($person as $key => $value) {
        echo $key . ": " . $value . "\n";
    }

    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    
    // Accessing elements:
    echo $matrix[0][0] . "\n"; // Output: 1
    echo $matrix[1][2] . "\n"; // Output: 6
    
    // Looping through the array:
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            echo $matrix[$i][$j] . " ";
        }
        echo "<br>";
    }
    
    // Using foreach for multidimensional arrays
    foreach ($matrix as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
?>