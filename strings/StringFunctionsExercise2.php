<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 2: String Functions</h1>

<h2>Word Wrap the Long String</h2>
<?php 
    $string= "danas sam bio napolje i smorio se.";
    echo wordwrap($string, 29) . PHP_EOL;
?>
<h2>Find and Replace the word in upper case</h2>
<?php
    $sent= "Danas smo pronasli dvesta-pedeset eura.";
    $word= "DVESTA-PEDESET";
    echo $sent . PHP_EOL;
    echo str_replace("dvesta-pedeset", $word, $sent) . PHP_EOL;
?>
<h2>Count number of words</h2>
<?php   
    $recenica= "ova recenica ima tacno 6 rijeci.";
    echo str_word_count($recenica);
?>
<h2>Shuffle the Strings</h2>
<?php
    $content= "Ako i jedna recenica ima smisla dobices 100,000,000eura";
    echo str_shuffle($content);
?>
</body>
</html>

