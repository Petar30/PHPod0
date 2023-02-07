<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>

<?php 
    $variable1= "Matija 1";
    echo $variable1 
?>
    <hr>

    <h2>String Variable:</h2>
<?php
     $variable2= "Matijaa 2"; 
    print $variable2;
?>
    <hr>

    <h2>Integer Variable:</h2>
<?php
    $variabe3= 13;
    echo $variabe3;
?>
    <hr>

    <h2>Print Variable from Function:</h2>
<?php 
    function function_1() {
        $variable4= "Matija 4";
        echo $variable4;
    }
    function_1();
?>
    <hr>

    <h2>Static Variable:</h2>
<?php 
    static $variable5;
    $variable5= 13;
    echo $variable5;
?>
    <hr>

    <h2>Global Variable:</h2>
<?php 
    global $variable6;
    $variable6= "Matija 6";
    echo $GLOBALS['variable6'];
?>
    <hr>

    <h2>Super Global Variable:</h2>
<?php 
    global $variable7;
    $variable7= "matija 7";
    echo $GLOBALS ['variable7'];
?>
    <hr>

    <h2>Variables of Variables:</h2>
<?php 
    $variable8= "Matija";
    $variable9= "variable8";
    print "Moje ime je " . $$variable9;
?>
    <hr>

</body>
</html>
