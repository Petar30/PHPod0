<?php
    // function custom_error_hand($errornum,$errorstring) {
    //     echo $errorstring;
    // } 
    //     set_error_handler('custom_error_hand');
    //     echo (5 / 0);
    function custom_error_handler($errno, $errstr) {
        echo $errstr;
    }

    set_error_handler('custom_error_handler');
    echo ( 5 / 0 );



