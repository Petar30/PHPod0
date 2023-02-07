<?php
    //define boolean variable
    $flag1= true;
    $flag2= false;
    echo ($flag1) ? "True" : "False";
    print PHP_EOL;
    echo ($flag2) ? "true" : "false";
    print PHP_EOL;

    //print boolean variables
    echo "True: " . $flag1 . PHP_EOL;
    echo "False: " . $flag2 . PHP_EOL;

    //use string as boolean condition
    $isloggedin= true;
    $usersessionname= "Matija";
    echo ($isloggedin && $usersessionname) ? "$usersessionname Logged in " : "$usersessionname not logged in";
    echo PHP_EOL;

     //use string as boolean condition
     $isloggedin= true;
     $usersessionname= null;
     echo ($isloggedin && $usersessionname) ? "User Logged in " : "User not logged in";
     echo PHP_EOL;
//user integer variable as boolean, negaive values
$marks=1;
echo ($marks) ? "marks has value" : "marks doesnt have value";
echo PHP_EOL;
//operators result into boolean cond
$name= "petar";
echo ($name === "petar") ? "Yes petar" : "Not petar";


