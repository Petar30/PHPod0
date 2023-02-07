<?php 
    //calculate employees salary

    class Employee {
        public $id;
        public $name;
        public $workingsHourPerDay= 8;
        public $hourlyRate= 15;
        public $totalLeaveTaken;
        public $workingDays;

        function salary($totalDays) : int {
            //$this is a special variable which is be used to access class properties
            $this->workingDays = $totalDays - $this->totalLeaveTaken;
            $salary = $this->workingDays * $this->workingsHourPerDay * $this->hourlyRate;
            return $salary;
        }
    }

$emp1= new Employee();
$emp1->id = 101;
$emp1->name = "Ilija";
$emp1->totalLeaveTaken = 4;
$salary= $emp1->salary(20);
echo "$emp1->name has worked for $emp1->workingDays days and taken $emp1->totalLeaveTaken leaves." . PHP_EOL;
echo "$emp1->name's salary is $salary" . PHP_EOL;

$emp2= new Employee();
$emp2->id = 111;
$emp2->name = "Zeljko";
$emp2->totalLeaveTaken = 2;
$salary= $emp2->salary(20);
echo "$emp2->name has worked for $emp2->workingDays days and taken $emp2->totalLeaveTaken leaves." . PHP_EOL;
echo "$emp2->name's salary is $salary" . PHP_EOL;
