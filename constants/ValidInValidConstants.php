<?php
    define("LANGUAGE", "PHP");
    define("VERSION", 7.3);

    //ne ovako za konstante __CONSTANTS__
    define("__CONSTANTS__", "Wrong practise");
    print LANGUAGE . "VERSION IS" . VERSION . "<BR>";
    print __CONSTANTS__  .  "<br>";

    //ne koristiti isto ime za variable 
    $name= "matija";
    define("NAME", "matija" );

    // use the same naming covnetion.
    //do not start variable or constant name with integers
    $_1message= "hello";
    define("_1message", "hello");
    echo $_1message . "<br>" . _1message; 
?>