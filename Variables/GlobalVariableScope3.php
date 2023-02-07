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
    $message= "Dobrodosli u php";

    function print_message() {
        echo $GLOBALS ['message'];
    }
    print_message();
    echo $message;

    //sample 3
    global $message1;
    $message1="<br>" . "Dobrodosli u php!";

    function print_message1() {
        global $message1;
        $message1="<br>" . "This is changed values of message1";
        echo $message1;

    }
    print_message1();
    echo $message1;
     
?>
