<?php
    //define decimal variables
    $totalscore= 78.87;
    print $totalscore . PHP_EOL;
    //negative decimals
    $temp= -40.50;
    print $temp . PHP_EOL;
    //round a dobule varriabvle
    $price= 4.99;
    echo round($price) . PHP_EOL;
    //compare two double with precision 0.1 = 1.87 ~ 1.97
    $price= 1.87;
    $bid= 1.99;
    print  (abs($price - $bid) < 0.1) ? "Accept offer" : "Decline offer" . PHP_EOL;
    $price= 50.01;
    $money= 50;
    $change= $money - $price;
    print ($change >= 0) ? "we will buy it." : "we will not buy it." . PHP_EOL;
?>