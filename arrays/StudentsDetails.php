<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eto tako</title>
</head>

<body>
    <h1> 1) Create a Students Array with 3 students
        2) Provide the details: ID, Name, Age and Class
        3) Fill up the Array and Display in HTML Page
        4) Use Table to display the Students details.</h1>

    <h2> 1) </h2>
    <?php
    $arr = [
        [
            "name" => "petar",
            "class" => "II-4",
            "age" => "16",
            "birthday" => "08.07",
            "id" => "3.14"],
        [
            "name" => "petar s",
            "class" => "III-3",
            "age" => "17",
            "birthday" => "12.07",
            "id" => "52642"],
        [
            "name" => "matija",
            "class" => "fakultet",
            "age" => "22",
            "birthday" => "20.05",
            "id" => "584"],
    ]
    ?>
    <h2>2)</h2>
    <?php
        echo '<table style="width:100%"><tr><th></th>';
        foreach($arr as $variable){
            echo "<th>";
            echo $variable["name"] . "<br>";
            echo $variable["class"] . "<br>";
            echo $variable["age"] . "<br>";
            echo $variable["birthday"] . "<br>";
            echo $variable["id"] . "<br>";
            echo "</th>";
        } 
        echo "</tr>";
        
    
    ?>

</body>

</html>