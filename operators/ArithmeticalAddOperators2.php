<?php
    /*
    +
    -
    *
    /
    %
    **
    */

    //sample1 
    $maths=70; 
    $science= 30;
    $english= 80;
    $totalmarks= $maths + $science + $english;
    echo "student total marks are: $totalmarks, for math: $maths, for science: $science, for english: $english" . PHP_EOL;
    //sample2
    echo "student total marks are: " . ($maths + $science + $english) .  ", for math: $maths, for science: $science, for english: $english, bez koriscena totalmarks" . PHP_EOL;

?>