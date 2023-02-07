<?php
function dij($x, $y): int
{
    if ($y <= 0) {
        throw new Exception("Ne moze ovo ovo je dijeljenje sa nulom");
    } else {
        echo $x / $y;
    }
    return $x / $y;
}
try {
    $result = dij(1,0);
} catch (Exception $e) {
    echo "Couth error: " . $e->getMessage() . PHP_EOL;
}
