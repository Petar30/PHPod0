<?php 
    $inputvalue= -1;
    if ($inputvalue <= 0) {
        goto error_block;
    }
    exit();
    error_block:
    echo "This is error block and will execute anyway" . PHP_EOL;

    for($count=0;$count <=10;$count++) {
        if ($count==2) {
            goto loop2;
        }
    }
    exit();
    loop2:
        echo "Counter Value is $count" . PHP_EOL;        


