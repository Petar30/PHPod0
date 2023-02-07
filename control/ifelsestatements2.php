<?php
    //sample 1 if, else
    $some_boolean_condition= true;
    if($some_boolean_condition) {
        echo "this is a if block condition" . PHP_EOL; 
        echo "this is a true condition " . PHP_EOL; //kad je tvrdnja true onda se ovo printa
    } else {
        echo "this is a else block condition" . PHP_EOL; 
        echo "this is a false condition " . PHP_EOL; //kada je tvrdnja false onda se ovo printa
    }

    $onemore_boolean_condition= false;
    if ($some_boolean_condition && $onemore_boolean_condition) {
        echo "this is a if block condition" . PHP_EOL; 
        echo "this is a true condition " . PHP_EOL;
    } else {
        echo "this is a else block condition" . PHP_EOL; 
        echo "this is a false condition " . PHP_EOL;
    }
?>
    <!doctype html>
    <html>
    <head>
        <title> if else statements</title>
    </head>
    <body>
        <?php 
            if ($some_boolean_condition || $onemore_boolean_condition
            ) { ?>

            <h1> this is a true cond</h1>
            <?php } else { ?>
            <h1> this is a flase cond</h1>
            <?php } ?>
    </body>
    </html>
            
    <?php   
    //samle 2
                
    $input1= "some text from the user";
    $input2= 34;

    if (!is_null($input1) ) {
        echo '$input1 is not empty' . PHP_EOL;
    }else {
        echo '$input1 is empty';
    }

    //cond 2
    if (isset($input1) && !is_null($input1) ) {
        echo '$input1 is not empty' . PHP_EOL;
    }else {
        echo '$input1 is empty';
    }
    //cond 3
    if ($input1 != "") {
        echo '$input1 is not empty' . PHP_EOL;
    }else {
        echo '$input1 is empty';
    }
    //best method to check if the field is empty
    if (!empty($input1) ) {
        echo '$input1 is not empty' . PHP_EOL;
    }else {
        echo '$input1 is empty';
    }
    
    if ($input2 >= 22) {
        echo '$input2 is greater or equal than 24' . PHP_EOL;
    }else {
        echo '$input1 is less than 24';
    }
    ?>

