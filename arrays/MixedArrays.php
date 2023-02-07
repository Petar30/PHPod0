<?php 
    $arr=[];
    $arr[0]=1;
    $arr[2]= "String";
    $arr[4]= true;
    $arr[10]= 124.3;

    $arr[]= "new string1";
    $arr[]= "new string2";
    var_dump($arr) . PHP_EOL;
    $arr[0] = "now its a string";
    foreach ($arr as $value) {
        echo $value . PHP_EOL;
    }

    echo !empty($arr[1]) . PHP_EOL;

