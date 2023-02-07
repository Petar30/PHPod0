<!doctype html>
<html>
<head>
    <title>Data Types</title>
        <style> body {background-color: black;}
                h1 {color: red;}
                h2 {color: red;}
                p {color: white;} 
        </style>
</head>
<body>
<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
<?php
    $length= 10;
    $breath= 20;
    $area= $length * $breath;
    print "<p>Area of this cube is:</p>" . $length;
?>
<h2>Calculate Student Exact Marks Percentage with Double:</h2>
<?php   
    $math= 10;
    $science= 9;
    $chemestry= 10;
    $biology= 8;
    $totalmarks= 40;
    $mymarks= $math + $science + $biology + $chemestry;
    $markpercentage= $mymarks / $totalmarks * 100;
    echo "<p>Untill now this student shows this marks succsesfull percentage: </p>" . $markpercentage;
?>
<h2>Check if the user has admin roles:</h2>
<?php
    $username= true;
    $password= true;
    $loggedin= $username && $password;
    $adminrolesusername=true;
    $adminrolespassword= false;
    $adminrolesaccess= $adminrolesusername && $adminrolespassword;
    echo ($loggedin) ? "<p>User logged in succsesfully" : "User failed to log in.</p>";
    echo "<br>";
    echo ($adminrolesaccess) ? "<p>User has access to admin roles</p>" : 
    "<p>User doesnt have access to admin roles, incorrect admin password.</p>";
?>

<h2>Define and Display a User Name using Strings:</h2>
<?php
    $firstname= "Petar";
    $lastname= "Terzic";
    $fullname= $firstname . $lastname;
    echo "<p>User's full name is $fullname.</p>";
    echo "<br>";
    $username= $firstname . $lastname . 69;
    echo "<p>Username of this user is $username.</p>";
?>
<h2>Check if the variable is null or not:</h2>
<?php
    $num1= 82;
    $num2= null;
    $num3= $num1 && $num2;
    echo ($num3) ? "<p> Final number has value.</p>" : "<p>Final Number doesnt have value.</p>";
    echo (!is_null($num3) ) ? "<p> Final number is null</p>" : "<p> Final number has value.</p>";
    echo (is_null($num3) ) ? "<p> Final number has value</p>" : "<p> Final number is null</p>";
?>
</body>
</html>

