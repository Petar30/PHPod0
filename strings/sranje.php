<!doctype html>
<html>
<head>
    <title> Assignment</title>
</head>
<body>
    <h1> 1) Find a Length of a String
         2) Find a Field inside the String
         3) Write a Documentation about your program using heredoc
         4) Show some examples of String Functions. </h1>


    <h2> 1) </h2>
<?php 
    $string= "Petar";
    echo strlen($string) . "<br>";
?>
    <h2> 2) </h2>
<?php   
    $word= "najbolje";
    echo stripos($string, $word); 
?>
    <h2> 3) </h2>
<?php
    echo <<< PODACI_KURAC
    Moje ime je petar bla bla bla bla
    Prezime terzic bl bl bl blb lb l bl bl blb
    PODACI_KURAC;
?>
    <h2> 4) </h2>
<?php
    $nesto= "              kako si          ";
    echo $nesto . "<br>";
?>
</body>
</html>

    