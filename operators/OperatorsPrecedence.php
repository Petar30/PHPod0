<?php 
    /* 
    Unary - !, ++, --
    Multiplication - * / %
    add - +, -
    relational - <, >, <=, >=
    Eq - ==, !=
    logical add - &&
    logical or - ||
    condicional - ?:
    assignment - +=, -=, *=, /=, &=, **=, =
    */
    $val= 10;
    echo $val++;
    $counter= $val++;
    echo $counter;
    echo PHP_EOL;
    $val= 5 * 2 + 5;
    echo $val;

    $result1= true && true;
    $result2= true and false;
    echo ($result1) ? "true" : "false";
    echo PHP_EOL;
    echo ($result2) ? "true" : "false";    


