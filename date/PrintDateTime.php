<?php
    //date

    echo "currect date: " . date("d-m-y") . PHP_EOL;
    echo "currect date: " . date("D-M-Y") . PHP_EOL;
    
    echo "currect date: " . date("d-m-y h:i:s:a") . PHP_EOL;
    echo "currect date: " . date("d-m-y H:i:s:A") . PHP_EOL;

    echo "currect time is: " . time() . PHP_EOL;

    $time= time() + 1200;
    echo "currect date: " . date("d-m-y h:i:s:a", $time) . PHP_EOL;
