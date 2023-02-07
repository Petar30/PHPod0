<?php 
    $arr=[4,1,2,3,5,6];
    print_r($arr);;
    sort($arr);
    print_r($arr);
    rsort($arr);
    print_r($arr);


    $arr=["3" => "matija", "1" => "petar", "4" => "jovana", "2" => "nina"];
/*
    print_r($arr);
    asort($arr);
    print_r($arr);
    arsort($arr);
    print_r($arr);
*/
    ksort($arr);
    print_r($arr);
    krsort($arr);
    print_r($arr);
