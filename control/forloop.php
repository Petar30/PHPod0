<?php 
    //sample 1
    /*
    for($value= 1; $value <=10; $value++) {
        $result = $value % 2;
         if($result > 0) {
            echo $value . PHP_EOL;
         }
    }
    
    $value= 1;
    for(; $value <=10; $value++) {
        $result = $value % 2;
         if($result > 0) {
            echo $value . PHP_EOL;
         }
    }
    
    $value= 0;
    for(; $value <=10; ++$value) {
        $result = $value % 2;
         if($result > 0) {
            echo $value . PHP_EOL;
         }
    }
    
    for ($value=1;$value <= 10;$value++) {
        $result = $value % 2;
        if ($result > 0) {
            echo $value . PHP_EOL;
        } 
    }
    */  
    for ($value=1;$value<= 10;$value++) {
        $result = $value % 2;
        if ($result == 0) {
            echo $value . PHP_EOL;
        }
    }
    