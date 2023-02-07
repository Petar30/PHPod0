<?php 
    class Car{
        public $name;
        public $colour;

        function sayhello() {
            echo "Hello from Car class." . PHP_EOL;
        }
    }

    $car1 = new Car();
    $car1->name = "Ferrari";
    $car1->colour = "red";
    $car1->sayhello();
    echo $car1->name . " is $car1->colour color." . PHP_EOL;

    $car2 = new Car();
    $car2->name = "BMW";
    $car2->colour = "blue";
    $car2->sayhello();
    echo $car2->name . " is $car2->colour color." . PHP_EOL;