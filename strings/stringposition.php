<?php 


    $cont= "very long content and it is a string";
    $findcontentword= "content";
    $position = strpos($cont, $findcontentword);
    echo $position . PHP_EOL;

    $findcontentword= "content1";
    $pos= stripos ($cont, $findcontentword);
    echo $pos . PHP_EOL;
    echo true . PHP_EOL;
    echo false . PHP_EOL;
    echo true . PHP_EOL;

    if ($pos == false) {
        echo "1) Not found" . PHP_EOL;
    }


    $findcontentword= "very";
    $pos= stripos ($cont, $findcontentword);
    echo $pos . PHP_EOL;

    if (!$pos){
        echo "$pos value" . PHP_EOL;
        echo "2) Not found" . PHP_EOL;
    }

    if(!0) {
        echo "false cond" . PHP_EOL;
    }

    if ($pos === false) {
        echo "3) not found!" . PHP_EOL;
    }

