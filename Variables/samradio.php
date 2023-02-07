<!doctype html>
<html>
    <head>
        <title>Assignment</title>
    </head>
<body>
    <h1> String i Integers</h1>
    <?php 
        $duzina= "30";
        $visina= 25;
        $rezultat= $duzina * $visina;
        echo "Rezultat je: $rezultat";
    ?>
        <hr>
        <h1>Funkcija i variabla</h1>
    <?php 
        $broj= "10";
        function sam() {
            $broj= 20;
            echo "Tvoj drugi broj je: $broj";
        }
        sam();
        print $broj;
    ?>
    <hr>
    <h1> Super Global u funkciji i izvan nje</h1>
    <?php 
        global $cifra;
        $cifra= "19";
        function listic() {
            echo $GLOBALS ['cifra'];
        }
        listic();
        
        echo "<br>" . $cifra ?>
    <hr>
    <h1> static u funkciji</h1>
    <?php 
        function jedan() {
            $broj=1;
            $novibroj= $broj + "1";
            echo $novibroj . "<br>";

        }
        jedan();
        jedan();
        jedan();
        jedan();
        jedan();
        jedan();
        jedan();

        echo "<hr>";

        function kakoto() {
            static $broj= "1";
            echo $broj . "<br>";
            $broj= $broj + "1";
        }
        kakoto();
        kakoto(); 
        kakoto();
        kakoto();

    ?>
        <hr>
        <h1> Global pt2</h1>
     <?php 
        global $poruka;
            $poruka= "Poruka" . "<br>";
            function porucica() {
            print $GLOBALS ['poruka'];
            }
        print $poruka;
        porucica();