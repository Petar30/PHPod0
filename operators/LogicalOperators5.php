<?php
    /*
    * AND obije tacne
    * OR  obije mogu biti tacne a moze i jedna
    * && obije tacne
    * || isto kao i or
    * ! if not
    */
    //sample1
    $permission= true;
    $loggedin= true;
    $user= "Matija ";
    echo ($permission and $loggedin) ? "Hello, $user" : "Hello, Guest" . PHP_EOL;
    //sample2
    $matematika= true;
    $srpski= false;
    echo ($matematika or $srpski) ? " Student je polozio prijemni. " : " Student nije polozio prijemni. " . PHP_EOL;
    //sample3
    $result1= true && false;
    $result2= true and false;
    echo PHP_EOL;
    echo ($result1) ? "true" : "false";
    echo PHP_EOL;
    echo ($result2) ? "true" : "false";
    //sample4
    $result1= true || false;
    $result2= true or false;
    echo PHP_EOL;
    echo ($result1) ? "true" : "false";
    echo PHP_EOL;
    echo ($result2) ? "true" : "false";
    //sample 5
    $total= 34;
    $passingmarks= 35;
    $ispassed= ($total >= $passingmarks) ? true : false;
    echo PHP_EOL;
    echo (!$ispassed) ? "nije prosao test" : "prosao je test";
    




