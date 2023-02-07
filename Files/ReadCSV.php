<?php 
    //whole content
    $fileName= "student.csv";
    $content= file_get_contents($fileName); 
    print_r ($content) . PHP_EOL; 
    echo   PHP_EOL;


    //line by line
    $csvFile= file($fileName);
    var_dump($csvFile);
    foreach ($csvFile as $line ) {
        $data[] = str_getcsv($line);
        print_r($data);
    }

    $csv= array_map('csv_getcsv', file($fileName));
    print_r($csv);