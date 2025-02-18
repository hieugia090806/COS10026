<?php
    echo "Hi\n";
    echo("Hi\n");
    echo "<h2>PHP is Fun!</h2>\n";
    echo "Hello world!<br>\n";
    echo "I'm about to learn PHP!<br\n";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.\n";
    
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    echo "<h2>$txt1</h2>\n";
    echo "<p>Study PHP at $txt2</p>\n";

    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    echo '<h2>' . $txt1. '</h2>';  
    echo '<p>Study PHP at ' . $txt2 . '</p>';

    $x = 5;
    $x = (string) $x;
    var_dump($x);
?>