<!doctype html>
<html>
<head>
    <title>
        Constants
    </title>
</head>
<body>

    <h1>Exercise 1: Define and Display Constants</h1>
<?php 
    define ("KONSTANTA", "konstanta1");
    print KONSTANTA;
?>
    <hr>

    <h2>String :</h2>
<?php 
    print KONSTANTA;

?>
    <hr>

    <h2>Integer Constant:</h2>
<?php 
    define ("KONSTANTA2", 2);
    print KONSTANTA2;
?>
    <hr>

    <h2>Print Constant from Function:</h2>
<?php 
    function funkcija_prva() {
        define ("KONSTANTA3", "konstanta3");
        print KONSTANTA3;
    }
        funkcija_prva();
?>

        <hr>
    <h2>Display Magic Constant:</h2>
<?php 
    print "In this php code this line is number: " . __LINE__;
    print "<br>" . "This php code is located in: " . __FILE__;
?>
<hr>

</body>
</html>

