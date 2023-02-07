<?php 
    $arr= [ "mon", "tues", "wen", "thurs", "fri", "sat", "sun"];
    var_dump($arr) . PHP_EOL;
    foreach($arr as $values) {
        echo $values . PHP_EOL;
    }
    $arr= [0=> "mon",1=> "tues",2=> "wen",3=> "thurs",4=> "fri",5=> "sat",6=> "sun"];
    var_dump ($arr) . PHP_EOL;
    foreach($arr as $values) {
        echo $values . PHP_EOL;
    }

    foreach($arr as $key => $values) {
        echo $key . "=>" . $values . PHP_EOL;
    } 

    print_r(array_keys($arr) );
    
    foreach(array_keys($arr) as $key1) {
        echo $key1 . PHP_EOL;
    } 

    $userdetails= [
        "matija" => "matija3@icloud.com",
        "petar" => "petar3@icloud.com",
        "jason" => "jasonbrody3@icloud.com"
    ];
    var_dump($userdetails) . PHP_EOL;
    echo $userdetails["petar"] . PHP_EOL;
    $userdetails["trevor"] = "trevor@icloud.com";
    var_dump($userdetails) . PHP_EOL;

    //kuku
    //$userdetails[] = ["jane" => "jane@icloud.com"];
    //var_dump($userdetails) . PHP_EOL;
    $userdetails["jane"] = "jane@icloud.com";
    var_dump($userdetails) . PHP_EOL;
    $userdetails[] = ["jane" => "lose je ovo!"];
    var_dump($userdetails) . PHP_EOL;

    
    
    

