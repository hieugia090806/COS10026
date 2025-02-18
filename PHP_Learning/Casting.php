<?php
    //Cast to String
    $a = 5; 
    $a = (string) $a;
    var_dump($a);

    //Cast to Integer
    $b = 5; 
    $b = (int)$b;
    var_dump($b);

    //Cast to float
    $c = 5;
    $c = (float) $c;
    var_dump($c);

    //Cast to Boolean
    $d = 5;
    $d = (bool) $d;
    var_dump($d);

    //Cast to Array
    $e = 3.14;
    $e = (array) $e;
    var_dump($e);

    //Cast to Object
    $f = 3.14;
    $f = (object) $f;
    var_dump($f);

?>