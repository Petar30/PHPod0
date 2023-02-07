<?php 
/*
    function add($a, $b) : int{
        return $a + $b;
    }
    $addfun = "add";
    echo "Result: " .  $addfun(1,2) . PHP_EOL; 
*/

$addfun= function($a, $b) : int {
    $addition= $a + $b;
    return $addition;
};
echo $addfun(1,2 ) . PHP_EOL;

 $content= "this is a string mess";
 $printcontent= function() use($content){
    echo $content;
 };
$printcontent();