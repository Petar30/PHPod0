<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 1: How to Use the Operators</h1>

    <h2>Add two numbers using Arithmetical Operators:</h2>
<?php 
    $number1= 10;
    $number2= 11;
    $totalnumber= $number1 + $number2;
    echo $totalnumber;
    echo PHP_EOL;
?>
<hr>
    <h2>Find Student passed or failed using Conditional Operatos:</h2>
<?php   
    $studentmark= 99;
    $markforpass= 79;
    echo ($studentmark >= $markforpass) ? "Student passed test. " : "student failed";
    echo PHP_EOL;
?>
<hr>
    <h2>Show a number is even or odd using Comparison Operators:</h2>
<?php 
    $num= 7;
    print "Your number is: $num.";
    function number_odd() {
        $num= 7;
        $mod= $num % 2;
        echo ($mod == 1) ? "Number $num is odd" : "Number $num is even";
    }
    print "<br>";
    number_odd();
    
?>
<hr>
    <h2>Check if user has access and login rights using Logical Operators:</h2>
<?php   
    $username= (true);
    $password= (true);
    echo ($username && $password) ? "User have acces and login rights,
     because username and password are correct" :
    "User doesnt have acces and login rights because username or password are incorrect. ";
?>
<hr>
    <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
<?php 
    $value= 89;
    $value += 10;
    print $value;
?>
</body>
</html>





