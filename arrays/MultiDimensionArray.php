<?php   
     $arr= [0,1,2,3,4,5];
     var_dump($arr);

     $arr= [
        "matija" => "Cao!",
        "petar" => "zdravo!",
        "nina" => "pozdrav!"
     ];
     
     $arr2 = [
                [0,1,2,3,4,5],
                [6,7,8,9],
                [10,11],
     ];
     var_dump($arr2);
     foreach($arr2 as $singlearr) {
        var_dump($singlearr);
     }

     foreach($arr2 as $singlearr) {
        echo "[";
        foreach ($singlearr as $values){
            echo $values . ",";
      
        }
        echo "]" . PHP_EOL;
     }

     $arr =[

        "emaillist1" => [
            "matija" => "matija23123",
            "petar" => "petar111",
        ],
        "emaillist2" => [
            "nina" => "nina333",
            "joca"=> "joca222",
        ]

        ];
        foreach($arr as $valuearr) {
            foreach ($valuearr as $values){
                echo $values . PHP_EOL;
            }
        }

        foreach($arr as $key => $valuearr) {
            echo "values for key: $key" . PHP_EOL;
                foreach($valuearr as $values) {
                    echo $values . PHP_EOL;
                }
        }
        