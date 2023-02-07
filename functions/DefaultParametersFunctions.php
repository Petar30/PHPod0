<?php
    declare(strict_types=1);

    function getevennumbers(int $limit,$skipnumber = -1){
        for($index=0;$index<=$limit;$index++){
            if ($index%2==0){
                echo "Even numbers: $index" . PHP_EOL;
            }
        }
    }

    
    function printoddnumbers(int $limit, $skipnumber = -1)
{
    for ($index = 0; $index <= $limit; $index++) {
        if ($index === $skipnumber) {
            continue;
        }
        if ($index % 2 > 0) {
            echo "Odd number: $index" . PHP_EOL;
        }
    }
}


printoddnumbers(10);

getevennumbers(10);

