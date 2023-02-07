<!doctype hmtl>
<head>
    <title>
        Assignment
    </title>
</head>
<body>
    <h1> Zadatak </h1>
    <h2> Arithmetical Operator</h2>
<?php 
    $val1= 3;
    $val2= 4;
    $val= $val1 + $val2;
    echo $val;
    echo "<br>";
    $val3= $val1 * $val2;
    echo $val3 . PHP_EOL;
?>
<hr>
    <h2>Conditional Operator</h2>
<?php
    $matija= true;
    $petar= true;
    echo ($petar) ? "Petar je polozio." : "Petar je pao.";
    echo "<br>";
    echo ($matija) ? "Matija je polozio." : "Matija je pao.";
?>
<hr>
    <h2>Comparison Operator</h2>
<?php   
    $com= "14";
    $com1= "14";
    echo ($com === $com1) ? "Izrazi su identicni" : "Izrazi nisu identicni";
    echo "<br>";
    $com3= 10;
    $com4= "10";
    print ($com3 !== $com4) ? "Izrazi nisu isti" : "Izrazi su isti";
?>
<hr>
    <h2>Logical Operator</h2>
<?php 
    $tacno= true;
    $netacno= false;
    print ($tacno and $netacno) ? "tacno" : "netacno";
    print "<br>";
    print ($tacno or $netacno) ? "tacno" : "netacno";
    print "<br>";
    print ($tacno && $netacno) ? "tacno" : "netacno";
    print "<br>";
    print ($tacno || $netacno) ? "tacno" : "netacno";
?>
<hr>
    <h2> Assignment Operator</h2>
<?php   
    $broj= 12;
    $brojj= 13;
    $broj += $brojj;
    $brojj += $brojj;
    print $broj . "<br>" .  $brojj;
?>
<hr>
    <h2>Increment and Decrement Operator</h2>
<?php 
    $tvojbroj= 19;
    $novibroj= --$tvojbroj;
    print $novibroj;
    echo "<br>";
    print $tvojbroj--;
    print "<br>";
    print $tvojbroj;

?>
<hr>
    <h2>Bitwise Operator</h2>
<?php 
    $da= true & false;
    $ne= true & true;
    $mozda= true and false;
    $sigurno= true | false;
    $sigurnobre= true or false;
    $qyasuo= true ^ false;
    $wyasuo= true ^ true;
    $eyasuo=39;
    print (!$da) ? "kako si bez majke" : "eo ti";
    print "<br>";
    print $da;
    print "<br>";
    print $ne;
    print "<br>";
    print $mozda;
    print "<br>";
    print $sigurno;
    print "<br>";
    print $sigurnobre;
    print "<br>";
    print $qyasuo;
    print "<br>";
    print $wyasuo;
    print "<br>";
    print ~$eyasuo;
?>
<hr>
    <h2>Execution Operator</h2>
<?php 
    print `mkdir idegas`;
?>
<hr>
    <h2> Error Control Operator</h2>
    <!-- Ovo je pod // -->
<?php 
    //$greska= 1 / 0;
    //print $greska;
?>
<hr>
    <h2> Operator Precedence</h2>
<?php
    $o= 2;
    $a= 28;
    $s= $o * $a + $o; // prvo se vrsi mnozenje pa sabiranje
    print $s;
    print "<br>";
    $konacno1= true && true;
    $konacno2= false and true;
    echo ($konacno1) ? "ovo je tacna konsultacija" : "ovo je netacna konsulatcija";
    print "<br>";
    echo ($konacno2) ? "Ovo je tacna kons." : "ovo je netacna kons.";
?>
<hr>
</body>
</html>


    

