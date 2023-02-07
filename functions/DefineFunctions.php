<?php 
    function printevennumbers ($limit) {
        for($index = 0; $index <= $limit; $index++){
            if ($index%2 == 0) {
                echo "even number: $index." . PHP_EOL;
            }
        }
    }
    printevennumbers(20);
    

    function add($a,$b) {
        return $a + $b;
    }

    echo add(10,20) . PHP_EOL;