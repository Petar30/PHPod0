<?php 
    function kakosi($x, $y) : int{
        if ($y == 0) {
            throw new Exception("Ne moze");
        }else {
            echo $x / $y . PHP_EOL;
        }
        return $x / $y;
    }
    try {
        kakosi(1,1);
    }catch (Exception $e) {
        echo "couth error: " . $e->getMessage() . PHP_EOL;
    }finally{
        echo "Ovo ce se printat iako je tacno iako nije." . PHP_EOL;
    }