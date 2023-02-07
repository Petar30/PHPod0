<?php 
    //define null
    $name= null;
    print $name . PHP_EOL;
    echo ($name) ? "Has value" : "Empty" . PHP_EOL;
    //variable is null or not 
    $name= "0";
    echo ($name) ? "Has Value" : "Empty" . PHP_EOL;
    print (!is_null($name) ) ? "Has value" : "Empty" . PHP_EOL;
    //remove the variable from the program and memory
    //unset($name);
    //echo ( !is_null($name) ) ? "Not Null" : "Empty" . PHP_EOL;
    $namee=false;
    echo ($namee) ? "da" : "ne";
