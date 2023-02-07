<?php 
    // . - operator za kombinaciju stringova
    $firstname= "petar";
    $lastname= " terzic";
    $fullname= $firstname . $lastname;
    echo $fullname . PHP_EOL;


    $marks= 100;
    $passed= true;

    // string,integer,boolean and other basic variable types
    $content= "student: " . $fullname . "got total " . $marks . "he is passed - " . $passed;
    echo $content . PHP_EOL;