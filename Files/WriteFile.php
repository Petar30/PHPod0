<?php 
    $file= "something.txt";
    $fileHandler= fopen ($file, "w");
    fwrite($fileHandler, "new" );
    fclose($fileHandler);

    file_put_contents($file,"new new");

