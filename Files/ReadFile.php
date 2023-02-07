<?php 
    $file= 'something.txt';
    $content= file_get_contents($file);
    echo $content . PHP_EOL;

    $fileHandler= fopen($file, "w");
    fwrite($fileHandler, "how");
    fclose($fileHandler);
    $content1= file_get_contents($file);
    echo $content1;
    rename($file, 'someth',);