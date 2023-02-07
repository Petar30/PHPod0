<?php 
    // function custom_exception_hand($exception) {
    //     echo "Caught Exception: " . $exception->getMessage() . PHP_EOL;
    // } 

    //     set_exception_handler('custom_exception_hand');
    //     throw new Exception("exception is raised!");

    // function custom_exception_handler($exception) {
    //     echo "opa: " . $exception->getMessage() . PHP_EOL;
    // }

    // function divide($x, $y) : int {
    //     if ($y <=0 ) {
    //         throw new Exception("Divide by zero exception might happen");
    //     }
    //     $result = $x / $y;
    //     return $result;
    // }

    // set_exception_handler('custom_exception_hand');
    // divide(1,0);

    function sam_fataj($problem) {
        echo "Naso sam te: " . $problem->getMessage() . PHP_EOL;
    }
    function dijeljenje($a, $b) : int {
        if ($b == 0) {
            throw new Exception("ne mozes ovo");
        }
        return $a / $b;
    }
    set_exception_handler('sam_fataj');
    dijeljenje(1,0);