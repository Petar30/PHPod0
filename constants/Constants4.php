<?php

    //define constant
    //sample1
    
    define("LANGUAGE", "PHP");
    $lang= LANGUAGE;

    echo "This program is writting using $lang <br>";
    echo "This program is writting using LANGUAGE <br>";
    echo "This program is writting using " . LANGUAGE . "<br>";

    //sample2
    define ("LANGUAG", "JAVA");
    echo "This program is writting using "  . LANGUAGE . "<br>";
    
    //sample 3
    $LANGUAGE= "java";
    echo "This program is writting using "  . LANGUAGE . "<br>";
    echo "This program is writting using "  . $LANGUAGE . "<br>";

    //sample 4
    define("VERSION", 7.3 );
    echo VERSION; 

