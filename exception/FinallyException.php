<?php 
    
    function custom_exception_hand($exception) {
        echo "Caught Exception: " . $exception->getMessage() . PHP_EOL;
    } 

        set_exception_handler('custom_exception_hand');

        try{
            throw new Exception("exception is raised!");
        }finally{
            echo "this line is executed before exception." . PHP_EOL;
        }
