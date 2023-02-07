<?php
    /*
    $value=1;
    while ($value<=10) {
        echo $value . PHP_EOL;
        $value++;
    }
    */
    /*
    for($value= 1; $value <=10; $value++) {
        $result = $value % 2;
         if($result > 0) {
            echo $value . PHP_EOL;
         }
    }
    */
    $value=1;
    while ($value <=10) {
        $result= $value % 2;
            if($result > 0) {
                echo $value. PHP_EOL;                
            }
        $value++;
    }
    