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
    $user= "Matija";
    echo ($permission and $loggedin) ? "Hello, $user" : "Hello, Guest" . PHP_EOL;
    //sample2
    $matematika= true;
    $srpski= false;
    echo ($matematika or $srpski) ? " Student je polozio prijemni" : " Student nije polozio prijemni." . PHP_EOL;
