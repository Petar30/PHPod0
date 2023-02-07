<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Display Odd and Even Numbers</h1>
    <h2> Display Even and odd numbers</h2>
<?php 
    for ($num=1;$num<= 20;$num++) {
        $result = $num % 2;
        if ($result == 0) {
            echo "Even number: $num" . PHP_EOL;
        } else {
            echo "Odd number: $num" . PHP_EOL;
        }
    }
?>
<hr>
    <h2>Define the MAX_NUMBERS in the namespace file</h2>
<?php
    require "namespace.php";
    $num1= kakosi\MAX_NUMBERS;
    echo $num1;
?>
<hr>
    <h2>Write the for loop to loop for MAX_NUMBERS times</h2>
<?php   
    $num1= 1;
    for (;$num1 <= 31;$num1++){
        echo $num1 . PHP_EOL;
    }
?>
<hr>


</body>
</html>

