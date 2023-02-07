<?php 
    $content= "You can do string operations easily with String Functions";
    $findword= "operations";
    $position= -1;

    echo "\"$content\"". PHP_EOL;
    //number of words
    echo "number of words in the string: " . str_word_count($content) . PHP_EOL;
    //replace strings
    echo "Find and replace operations with manipulation: " . str_replace("operations", "manipulations", $content) . PHP_EOL;
    //reverse strings
    echo strrev($content) . PHP_EOL;
    //remove white spaces - ltrim and rtrim
    $content= "      " . $content . "             ";
    echo $content . PHP_EOL;
    echo trim($content) . PHP_EOL;
    //shuffle
    echo str_shuffle($content) . PHP_EOL;
    //find position case insenstive.
    echo stripos($content, "OPERATIONS") . PHP_EOL;
    //upper an lower case
    echo strtoupper ($content) . PHP_EOL;
    echo strtolower ($content) . PHP_EOL;
    //word wrap the string and display it.
    $content= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    echo wordwrap($content, 25) . PHP_EOL;
    echo $content . PHP_EOL;

