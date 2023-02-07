<?php
    date_default_timezone_set('America/Chicago');
    echo date("d/m/Y/ - H/i/sA") . PHP_EOL;
    $kakosi= getdate();
    var_dump($kakosi);
    foreach($kakosi as $key => $value){
        echo $key . "=>" . $value . PHP_EOL;
    }
    