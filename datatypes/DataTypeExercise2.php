<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Print Student Details</h1>

<h2>Student Information:</h2>

<?php
    $sname = "Alex";
    $class = "5C";
    $age = 17;
    $gender = "male";
    $contact = "123456789";

    // initialize variables
    $math = 0;
    $science = 0;
    $total = 0;
    $totalMarks = 0;
    $percentage = 0;
    $passed = null;
?>

<h2>Exams Attended and Marks:</h2>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Class</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Contact</td>
    </tr>
    <tr>
        <td><?= $sname ?></td>
        <td><?= $class ?></td>
        <td><?= $age ?></td>
        <td><?= $gender?></td>
        <td><?= $contact ?></td>
    </tr>
</table>
<?php
    $math = 69;
    $science = 100;
    $total = $math + $science;
    $attended = ($total > 0 ) ? "Yes, attended" : "Not attended";
    echo "Exam attended: $attended";
?>
<h2>Final Marks:</h2>

<?= "Total marks: $total" ?>

<h2>Percentage:</h2>

<?php
    $totalMarks = 200;
    $percentage = $total / $totalMarks *100;
    echo "Your percentage is: $percentage%"
?>

<h2>Result:</h2>

Final Result: <?= ($percentage >=75) ? "passed" : "failed" ?>

</body>
</html>

