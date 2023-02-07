<?php
function add($a, $b): int 
{
    $addition= $a + $b;
    return $addition;
}
echo "result: " . add(1,2) . PHP_EOL;



function getevennumbers($limit) : array{
    $retunrarr= [];
    for($index=0;$index<=$limit;$index++){
        if ($index%2==0){
            $returnarr[] = $index;
        }
    }
    return $returnarr;
}
$evennumbers= getevennumbers(10);
print_r($evennumbers);