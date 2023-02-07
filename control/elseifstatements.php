<?php 
    //using else if
    $imput_number= 10;
    $result= $imput_number % 2;
    if ($result == 0) {
        echo "even number" . PHP_EOL;
    } else if ($result != 0) {
        echo "odd number" . PHP_EOL;
    }
    $cond= false;
    $cond1 = false;
    if ($cond) {
       echo "cond is true" . PHP_EOL;
    } else if ($cond1) {
        echo "cond1 is true" . PHP_EOL;
    }else{
        echo "none of them is true" . PHP_EOL;
    }
    $mynumber= 10;
    if ($mynumber > 10) {
        echo 'NUmber is greater than 10' . PHP_EOL;
    } else if ($mynumber >= 10) {
        echo 'Number is equal or greater than 10' . PHP_EOL;
    } else {
        echo 'number is less than 10' . PHP_EOL;
    }