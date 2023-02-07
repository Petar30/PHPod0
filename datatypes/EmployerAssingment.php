<!doctype html>
<html>
<head>
    <title>Assignment</title>
</head>
<body>
    <h1> Assignment</h1>
        <h2>Employeee Details</h2>
<?php
    $firstname= "Rajna";
    $lastname= "Vuckovic";
    $fullname= $firstname . " " . $lastname;
    $age= 22;
    $sex= "Men";
    $marriedstatus= false;
    $email= "rajnavuckovic3@icloud.com";
    $address= "Ul. Slobode bb";
    $workhperday= "6h";
    $workhperweek= 6 * 6;
    $lastemployersalary= 4500;
    print "Name of new employee: " . $fullname;
    print "<br>";
    print "Age: " . $age;
    print "<br>";
    print "Sex: " . $sex;
    print "<br>";
    print ($marriedstatus)  ?  "Employee is married." : "Employee is not married.";
    print "<br>";
    print "Contact: " . $email;
    print "<br>";
    print "Address: " . $address;
    print "<br>";
    print "Daily hours of work: " . $workhperday;
    print "<br>";
    print "Weekly hours of work: " . $workhperweek . "h";
    print "<br>";
    print (abs($lastemployersalary) > 0 ) ? "Last employer's drawn salary is $lastemployersalary." : "Employer is not drawn his last salary.";
 ?>
</body>
</html>
