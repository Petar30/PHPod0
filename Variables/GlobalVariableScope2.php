<?php
    //sample 1
   global $name;
   $name= "Petar!";

    function print_name() {
        $name= "php";
        echo $name;
    
    }
    print_name();
    echo $name;

    //sample 2
    global $message;
    $message= "Dobrodosli u php!";

    function print_message() {
        $GLOBALS['message'];
        echo $message;

    }
    print_message();
    echo $message
?>
