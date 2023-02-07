<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 2: How to Use the Operators</h1>

    <h2>Decrement a number using Decrement Operator:</h2>
<?php
    $num= 44;
    $num -= 10;
    print $num
?>
<hr>
    <h2>Show the negative of 5 using Bitwise Operator:</h2>
<?php
    $number= 4;
    print ~$number;
?>
<hr>
    <h2>Execute a dos or linux command using Execution Operator:</h2>
<?php
    //echo `dir`;
?>
<hr>
    <h2>Raise and Error and control it using Execution Operators:</h2>
<?php
   //@$error = 1/0;
   echo 'Like Nothing Happened!';
?>
<hr>
    <h2>Show an example of Operator Precedence Operator:</h2>
<?php
    $number1= 19;
    $number2= 18;
    $finalnumber= $number1 + $number2 * $number2;
    print $finalnumber . PHP_EOL . "<br>";
    $ekko= true && false;
    $morde= true and false;
    print ($ekko) ? "EKKO CARRY" : "EKKO FEEDER";
    echo "<br>";
    print ($morde) ? "MORDE CARRY" : "MORDE FEEDER";    
?>

</body>
</html>

