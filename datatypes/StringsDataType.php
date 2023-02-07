<?php
    $name1= "petar";
    $name2= "terzic";
    print "$name1 $name2" . PHP_EOL;
    print '$name1 $name2' . PHP_EOL;
    //hahaha
    $name3= $name1 . " zvani " . $name2;
    echo $name3;
    echo PHP_EOL;
    //
    $name4= "this is a \"special\" string";
    echo $name4;
    echo PHP_EOL;
    $name4= "\t\tThis is a \"special\" string";
    echo $name4;
    echo PHP_EOL;
    $name4= "\T\h\i\s is a \"special\" string";
    print $name4;
    print PHP_EOL;
    $name4= 'this is a \"special\" string';
    print $name4;
    print PHP_EOL;
    
    echo strlen($name4) . PHP_EOL;


?>