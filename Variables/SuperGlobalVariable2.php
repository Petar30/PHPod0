<?php 
    //sample1
    global $message;
    $message= "Dobrodosli u php!";
    echo $GLOBALS ['message'] . "<br>";

    //sample 2
    echo "Filename: " . $_SERVER['PHP_SELF'];

?>