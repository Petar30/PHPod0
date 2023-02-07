<?php   
    $arr=[1,2,3,4,];
    $arr1=$arr;
    var_dump($arr1);

    foreach ($arr as $values) {
        $arr2[]=$values;
    }
    var_dump($arr2);

    $arr3= ["3" => "matija", "1"=>"petar", "2"=>"nina"];
    $arr4=$arr3;
    arsort($arr4);
    print_r($arr4);


    $arr5=[];
    foreach($arr4 as $key => $value){
        $arr5[$key] = $value;
    }
    var_dump($arr5);