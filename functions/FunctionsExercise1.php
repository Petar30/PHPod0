<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>1) Write a Simple Function to Accept Parameters and Return Value</h1>
    <h2> 1) </h2>
<?php
    function add($a, $b) {
        return $a * $b;
    }
    $kakosi = add(19,2);
    echo $kakosi;
?>
    <h2> kao nesto</h2>
<?PHP
    function ime($pazar,$potroseno_za_upotrebu) : string {
        $cista_zarada= $pazar - $potroseno_za_upotrebu;
        if ($cista_zarada < 0) {
            echo "Danas smo u minusu." . "<br>";
        }else if($cista_zarada > 0) {
            echo "Danas smo u plusu." . "<br>";
        }
        if ($cista_zarada == 0) {
            echo "Danas smo na nuli." . "<br>". "<br>";
        }
        return "U znosu od: " . $cista_zarada . "<br>";
    }
$kes= ime(2999, 2999);
echo $kes;

?>
</body>
</html>