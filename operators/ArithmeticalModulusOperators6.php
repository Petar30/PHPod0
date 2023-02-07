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
    //sample3
    $totalsubjects= 300;
    $totaldifference= $totalsubjects - $totalmarks;
    echo "Total difference between total marks and achieved marks is: " . $totaldifference . PHP_EOL;
    //sample 4
    $breath= 20;
    $length= 30;
    $area= $breath * $length;
    echo "Area of this place is: $area.";
    //sample 5
    $percentage= ($totalmarks / $totalsubjects) * 100;
    echo "Overall percentage is: $percentage%" . PHP_EOL;
    //sample 6
    $a= 100 % 5;
    echo $a . PHP_EOL;
    $b= 91 % 4;
    echo $b . PHP_EOL;

    
