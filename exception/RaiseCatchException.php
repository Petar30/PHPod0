<?php
    function divide($x, $y) : int {
        if ($y <=0 ) {
            throw new Exception("Divide by zero exception might happen");
        }
        $result = $x / $y;
        return $result;
    }
    try {
        $result = divide (1,0);
    
    }catch (Exception $e) {
        echo "caught exception: " . $e->getmessage() . PHP_EOL;
    }
?>