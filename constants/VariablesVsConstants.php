<?php
    /* ne treba $ za konstante
    konstante su definisane putem define metodom
    moze da se definise samo jednom ne mijenja se u sustini
    konstante imaju global scope i mogu se pristupiti svudje
    konstante mogu sluziti da udjemo na konstante
    */
    $name= "marija terzic";
    define ("name", "marija terzic");
    echo $name . "<br>" . name;

    //mogucnost da promijenimo variablu ali ne i konstantu

    $name= "matija";
    define("name", "Matija");
    echo "<br>" . $name . "<br>" . name;

    echo "<hr>";

    function print_constant() {
        echo $name . "<br>" . constant('name');
    }
    print_constant();
?>