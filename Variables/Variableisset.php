<?php 
    $name;
    echo $name;
    //ternary operator
    echo isset($name) ? "Variable set" : "Variable is not set";
    $name= "Matija Bozovic";
    echo isset($name) ? "<br>" . "Variable is set" : "Variable is not set";

    $firstname= " Matija";
    $name= $firstname;
    echo isset($name) ? "<br>" . "Variable is set" : "Variable is not set";

?>

<hr>

<?php 
    $ime= "Igor";
    $prezime= "Petrovic";
    echo isset ($prezime) ? "Prezime je postojece" : "Prezime nije postavljeno";
    echo isset ($ime) ? "<br>" . "Ime je upisano" : "Ime nije postojece";
 ?>

 <hr>

 <?php 
    $dobitak= 50;
    $ulazak= 10;
    echo isset ($dobitak) ? "Dobitak je isplacen, dobitak je: $dobitak" : "Dobitak nije isplacen, dobitak je: $dobitak";
    echo isset ($ulazak) ? "<br>" . "Ulazak je potvrdjen, ulazak kosta: $ulazak" : "<br>" . "Ulazak odbijen";
?>