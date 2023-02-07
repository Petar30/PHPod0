<?php 

function custom_exception_handler($exception) {
    echo "opa: " . $exception->getMessage() . PHP_EOL;
}

function divide($x, $y) : int {
    try {
    if ($y <=0 ) {
        throw new Exception("Divide by zero exception might happen");
    }
    }catch (Exception $e){
        throw new Exception("divide method has input par is less 0 " . $e->getMessage() );
    };
    return $x / $y;
}

set_exception_handler('custom_exception_handler');
divide(1,0);
