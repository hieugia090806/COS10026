<?php
  $a = 5;
  var_dump($a);
  $b = 5.34;
  var_dump($b);
  $c = "25";
  var_dump($c);
  $d = 5985;
  var_dump(is_int($d));
  var_dump(is_int($b));
  var_dump(is_float($b));
  $x = 1.9e411;
  var_dump($x);
  $y = acos(8);
  var_dump($y);

  $x = 5985;
  var_dump(is_numeric($x));
  
  $x = "5985";
  var_dump(is_numeric($x));
  $x = "59.85" + 100;
  var_dump(is_numeric($x));

  $x = "Hello";
  var_dump(is_numeric($x));
  
  $e = 23465.768;
  $int_cast = (int)$e;
  echo $int_cast;
?>