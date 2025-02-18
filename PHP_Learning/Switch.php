<?php
    //Simple Switch Statement
    $favcolor = "blue";
    switch ($favcolor) {
      case "red":
        echo "Your favorite color is red!"."\n"; //If red will print this message
        break;
      case "blue":
        echo "Your favorite color is blue!"."\n"; //If blue will print this message
        break;
      case "green":
        echo "Your favorite color is green!"."\n"; //If green will print this message
        break;
      default:
        echo "Your favorite color is neither red, blue, nor green!"."\n"; //If none of the above will print this message
    }

    $d = 4;

    switch ($d) {
    case 6:
        echo "Today is Saturday"."\n";
        break;
    case 0:
        echo "Today is Sunday"."\n";
        break;
    default:
        echo "Looking forward to the Weekend"."\n"; //Must be print
}
?>