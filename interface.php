<?php

// Define the interface
interface Chargeable {
    public function charge(): void; // A blueprint for charging
}

// A phone implementing the Chargeable interface
class Phone implements Chargeable {
    public function charge(): void {
        echo "Charging the phone with a USB-C cable.\n";
    }
}

// A laptop implementing the Chargeable interface
class Laptop implements Chargeable {
    public function charge(): void {
        echo "Charging the laptop with a power adapter.\n";
    }
}

// A tablet implementing the Chargeable interface
class Tablet implements Chargeable {
    public function charge(): void {
        echo "Charging the tablet with a lightning cable.\n";
    }
}


// A function to charge any Chargeable device
function plugInCharger(Chargeable $device): void {
    $device->charge();
}

// Use different devices
$phone = new Phone();
$laptop = new Laptop();
$tablet = new Tablet();

// Plug them in
plugInCharger($phone);  // Output: Charging the phone with a USB-C cable.
plugInCharger($laptop); // Output: Charging the laptop with a power adapter.
plugInCharger($tablet); // Output: Charging the tablet with a lightning cable.

// ---------------------------------------------------------------------------------------


class TodoList implements IteratorAggregate {
    private $tasks = [];  // This is our container
    
    // Method to add tasks
    public function addTask($task) {
        $this->tasks[] = $task;
    }
    
   
}

// Let's use it:
$myTodos = new TodoList();

// Add some tasks
$myTodos->addTask("Learn PHP");
$myTodos->addTask("Practice coding");
$myTodos->addTask("Take a break");

// Now we can loop through our tasks
foreach ($myTodos as $task) {
    echo "I need to: " . $task . "\n";
}


?>

