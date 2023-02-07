<!doctype html>
<head>
    <title> Exercise</title>
</head>
<body>
    <h1>Exercise1</h1>
<hr>
    <h2> 1) Define Constants File using Namespace and Use it in another php file.</h2>
<?php   
    include "define1.php";
    echo zadatak\zadatakmatija;
?>
<hr>
    <h2>2) Use Sub Namespace and Namespace Constants</h2>
<?php 
    include "define2.php";
    echo zadatak1\linija1\zadatakpetar . "<br>";
    echo zadatak1\linija2\zadatakbozo . "<br>";
?>
</body>
</html>
