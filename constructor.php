<?php


class People
{
    public $name;
    public $age;
    function __construct($personName,$personage)
    {
        echo "New Human Object Is Created\n";
        $this->name = $personName;
        $this->age=$personage;
    }
    function sayhi()
    {
        echo "Salam\n";
        $this->sayName();
    }
    function sayName()
    {
        echo "My name is {$this->name}, I am {$this->age} years old\n";
    }
}

$h1 = new People("Shoab",22);
$h2 = new People("Siddiq",23);
$h1->sayhi();
$h2->sayhi(); 