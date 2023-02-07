<?php 
    //switch statemants
    $imput_number= 10;
    $result= $imput_number % 2;
    if ($result == 0) {
        echo "even number" . PHP_EOL;
    } else if ($result != 0) {
        echo "odd number" . PHP_EOL;
    }

    switch ($result) {
        case 1:
            echo 'odd number' . PHP_EOL;
            break;
        case 0: 
            echo 'this is even number' . PHP_EOL;
            break;
        default:
            echo 'invalid input' . PHP_EOL;
    }
    $mynumber=10;
    if ($mynumber > 10) {
        echo 'NUmber is greater than 10' . PHP_EOL;
    } else if ($mynumber >= 10) {
        echo 'Number is equal or greater than 10' . PHP_EOL;
    } else {
        echo 'number is less than 10' . PHP_EOL;
    }
    switch ($imput_number) {
        case $imput_number > 10:
            echo "greater" . PHP_EOL;
            break;
        case $imput_number >= 10:
            echo "equal" . PHP_EOL;
            break;
        default:
            echo  "less" . PHP_EOL;
    }

    //string switch
    $weekday= "sunday";
    switch ($weekday) {
        case $weekday === "friday";
            echo "today is friday";
            break;
        case $weekday !== "friday";
            echo  "today is not friday";
    }