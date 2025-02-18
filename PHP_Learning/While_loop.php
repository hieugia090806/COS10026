<?php
    // While Loop
    //Print each i
    //$i = 1;
    //$s = 0;
    //while ($i <= 6) {
      //echo $i."\n";
      //$s += $i;
      //$i++;
    //}
    //Print sum of numbers from 0 to 6
    //echo "Sum of numbers from 0 to 6 is ".$s."\n";
    
    //Stop the loop when i is 3
    $i = 0;
    while ($i <= 6) {
      echo $i."\n";
      $i++;
      if ($i >= 4) {
        break;
      }
    }

    //Count to 100 by 10
    $i = 0;
    while ($i <= 100) {
      echo $i."\n";
      $i += 10;
    }
?>