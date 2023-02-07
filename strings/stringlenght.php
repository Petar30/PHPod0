<?php   
    $name= "Petar terzic";
    echo strlen($name) . PHP_EOL;
    $name1= "igor terzic";
    echo strlen($name1) . PHP_EOL;
    $word="terzic";
    echo strpos($name, $word) . PHP_EOL; 
    $word= "Petar";
    echo strpos ($name, $word) . PHP_EOL;
    $surname= "kako si brate moj";
    echo strlen($surname) . PHP_EOL;
        if (strlen($name) >= 0) {
            echo $name . PHP_EOL;
        }else {
            echo 'variable $name has value' . PHP_EOL;
        }
        $recenica= "Yasuo and Yone brothewrs";
        $rijec= "Yone";
        echo stripos($recenica, $rijec) . PHP_EOL;
        $recenica= "YONE YASUO";
        echo strtolower($recenica) . PHP_EOL;
        $recenica= "yone yasuo";
        echo strtoupper($recenica) . PHP_EOL;
        $recenica= "Kako je u pg brate moj dobri?";
        echo wordwrap($recenica, 20) . PHP_EOL;
        $recenica= "Yasuo is dog shit.";
        echo str_word_count($recenica) . PHP_EOL;
        $recenica = "YASUO     IS ONE OF WIND BRORTHERS     ";
        echo $recenica. PHP_EOL;
        echo trim($recenica) . PHP_EOL;
        echo lcfirst($recenica);

