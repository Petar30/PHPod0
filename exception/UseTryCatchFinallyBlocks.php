<?php 
    $kakosi= array("29"=>"Matija", 20=>"Petar", 2=>"Jovana", 3=>"Nikolina");
    var_dump($kakosi);
    foreach($kakosi as $kako) {
        echo $kako . PHP_EOL;
    }
    try{ 
        if(!array_is_list($kakosi)){
            throw new Exception("This array is not a list");
        }else{
            echo "this array is a list";
        }
    }catch (Exception $e) {
        echo "error: " . $e->getMessage() . PHP_EOL;
    }finally{
        echo "jedi govna";
    }



    