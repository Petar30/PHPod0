<?php
    //sample 1
   global $name;
   $name= "Petar!";

    function print_name() {
        $name= "php";
        echo $name;
    
    }
    print_name();
    echo $name;
?>