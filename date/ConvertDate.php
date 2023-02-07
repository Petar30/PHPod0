<?php
    $datearr= getdate();
    var_dump($datearr);

    foreach($datearr as $format => $value) {
        echo "$format => $value" . PHP_EOL;
    }

    echo "weekday: " . $datearr['weekday'] . PHP_EOL;
    echo "weekday: " . getdate()['weekday'] . PHP_EOL;
    echo "weekday: " . getdate()['year'] . PHP_EOL;
    echo __LINE__;