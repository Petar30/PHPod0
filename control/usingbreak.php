<?php   /*
    $value=1;
    do {
            if  ($value <= 10 ) {
                echo $value . PHP_EOL;
                $value++;
            }
    }
    while (true);
    
    $value=1;
    do {
        switch ($value) {
            case $value <=10:
                print $value;
                break;
        }
        $value++;
    }
    while (true);
    
    $value=1;
    do {
        echo $value . PHP_EOL;
        if ($value >= 10) {
            break;
        }
        $value++;

    }
    while (true);
    */

    $loop1=1;
    $loop2=1;
    $loop3=1;
    for (;$loop1 <=10;$loop1++) {

        while ($loop2 <= 10 ) {
            
            do{
                if($loop3 == 5){
                    break ;
                } 
                echo "Loop3: $loop3" . PHP_EOL;
                $loop3++;
                }while ($loop3 <=10);


                if($loop2 == 6){
                    break;
                } 
                echo "Loop2: $loop2" . PHP_EOL;
                $loop2++;
        }
        if($loop1 == 7){
            break;
        } 
        echo "Loop1: $loop1" . PHP_EOL;
    }