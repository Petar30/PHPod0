<?php 
    $arr= [1,2,3];
    //function to print array
    var_dump($arr);
    print_r($arr) . PHP_EOL;
    //access and print arrays
    echo $arr[0] . PHP_EOL;
    echo $arr[1] . PHP_EOL;
    echo $arr[2] . PHP_EOL;

    echo "$arr[0]" . PHP_EOL;
    echo "$arr[1]" . PHP_EOL;
    echo "$arr[2]" . PHP_EOL;

    //$arr is a array variable
    //$arry[0] is a array element 
    //0 is a index of array
    //array index starts with 0 not 1
    //array can store any type of value
    //arrays has length based on the number of the elements it has
    //you can also have array inside array
    //usecase: collection of variables together
    
    echo "array length: " . count($arr) . PHP_EOL; 
    //loob throw the aaray using for loop
    
    for($count=0; $count < count($arr); $count++) {
        echo $arr[$count] . PHP_EOL;
        echo "$arr[$count]" . PHP_EOL;
    }
    
    //  access array using constant

    const ARRAY_ELEMENT= 1;
    echo "{$arr[ARRAY_ELEMENT]}" . PHP_EOL;

    //change element
    print_r($arr);
    $arr[0]=5;
    $arr[1]=6;
    $arr[2]=7;
    print_r($arr);

    var_dump($arr);
    $arr[0]="this is a string";
    $arr[1]=true;
    $arr[2]=3.4;
    var_dump($arr);

    //storing
    $arr1 = [ 1,
    "string", false,
    23.2,];
    print_r($arr1);
    