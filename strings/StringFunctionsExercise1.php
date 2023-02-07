<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>
<?php
    $constant= "Hej, kakvo je danas vrijeme?";
    $word= "Danas";
    echo 'Position of $word in $constant is:' . stripos($constant, $word) . PHP_EOL;
?>

<h2>Calculate the Length of the String</h2>
<?php
    $content= "Sara ime.";
    echo 'Lenght of $content is: ' . strlen($content) . PHP_EOL;
?>

<h2>Remove White Spaces from left in the String</h2>
<?php
    $recenica= "      Danas je ponedeljak.";
    echo trim($recenica) . PHP_EOL;
?>
<h2>Reverse the String</h2>
<?php
    $sent= "Ovo je obrnuta recenica:D.";
    echo strrev($sent) . PHP_EOL;
?>


</body>
</html>
