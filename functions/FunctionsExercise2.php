
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1> 1) Write a function to accept two integer values and show add, sub, multiple and divide.
         2) Accept Optional parameter to perform specific operations
         3) Print the output from the function.
         4) declare(strict_types=1);</h1>
    <h2>1)</h2>
<?php
    function calculator(int $a, int $b, string $operaton= "all") {
        $operaton = strtolower($operaton);
        switch ($operaton) {
            case "add":
                $result = $a + $b;
                echo $result . "<br>";
                break;
            case "sub":
                $result= $a - $b;
                echo $result . "<br>";
                break;
            case "mul":
                $result= $a * $b;
                echo $result . "<br>";
                break;
            case "div":
                $result= $a / $b;
                echo $result . "<br>";
                break;
            default:
                $result1= $a + $b;
                echo "Add: $result1"  . "<br>";
                $result2 = $a - $b;
                echo "Subtract: $result2" . "<br>";
                $result3 = $a * $b;
                echo "Multiple: $result3" . "<br>";
                $result4 = $a / $b;
                echo "Divide: $result4" . "<br>";                       
        }

    }
    calculator(2,2);
    calculator(2,2, "add");
    calculator(2,2, "div");
    calculator(2,2, "mul");
    calculator(2,2, "sub");

?>

</body>
</html>