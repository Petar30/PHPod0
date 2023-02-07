<?php 
    $arr= [ "mon", "tues", "wen", "thurs", "fri", "sat", "sun"];
    var_dump($arr);
    $counter=0;
    foreach($arr as $values) {
        echo "[$counter] => $values => $arr[$counter]" . PHP_EOL;
        
        $counter++;
    }

    $counter=0;
    $arr= ["mon", 1, "wen", true, "fri", 4.2, "sun"];
    foreach($arr as $values) {
    echo "[$counter] => $values" . PHP_EOL;
    $counter++;
    }   

    var_dump($arr);
