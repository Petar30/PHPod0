<?php

declare(strict_types=1);
function printoddnumbers(int $limit,string $skipnumber)
{
    for ($index = 0; $index <= $limit; $index++) {
        if ($index === $skipnumber) {
            continue;
        }
        if ($index % 2 == 0) {
            echo "Odd number: $index" . PHP_EOL;
        }
    }
}
printoddnumbers(20,'3');
 