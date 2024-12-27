<?php

class Car {

    public $brand;
    public $price;
    public $name;

    public function __construct($brand, $price, $name) {
        $this->brand = $brand;
        $this->price = $price;
        $this->name = $name;
    }

    public function getCarInfo() {
        return "My car is from {$this->brand}, the price is {$this->price}, and the name is {$this->name}.";
    }
}

// Pass the required arguments to the constructor
$result = new Car("Toyota", 2500, "X Corolla");
$result2 = new Car("BMW", 5500, "G corolla");

// Echo the car information
echo $result->getCarInfo();
echo "\n";
echo $result2->getCarInfo();


?>
