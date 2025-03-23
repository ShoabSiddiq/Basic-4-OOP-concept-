<?php

// Create a PHP class called Car that has three private properties: $make, $model, and $year. Define a constructor method to set the values of these properties when a new object is created. Also, define six additional methods: get_make(), get_model(), get_year(), set_make(), set_model(), and set_year(). The get_ methods should allow us to retrieve the values of the private properties, while the set_ methods should allow us to update them. Finally, define a method called display_info() that echoes out the car's make, model, and year.

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_make($make) {
        $this->make = $make;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Car make: ". $this->make . "\n Car Model: " . $this->model . "\n Car Year: " . $this->year. "\n";
    }
}


$car = new Car('Toyota', 'Corolla', 2015);
$car->display_info();

$car->set_make('Honda');
$car->set_model('Civic');
$car->display_info();
