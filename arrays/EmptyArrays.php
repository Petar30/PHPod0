<?php   
    $arr= [];
    echo count($arr) . PHP_EOL;
    var_dump($arr) . PHP_EOL;
    print_r($arr) . PHP_EOL;

    if (empty($arr) ){
        echo "array is empty" . PHP_EOL;
    }

    $arr= 10;
    var_dump($arr) . PHP_EOL;

    $arr= [10];
    var_dump($arr) . PHP_EOL;

    $arr[0] = [10];
    var_dump($arr) . PHP_EOL; 

    $arr= [];
    var_dump($arr);
    if(empty($arr) ) {
       echo '$arr is empty' . PHP_EOL;
    }else {
       echo  '$arr is not empty' . PHP_EOL;
    };

    $arr = [ [] ];
    var_dump($arr);
