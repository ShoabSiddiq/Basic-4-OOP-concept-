<?php
class Human
{     public $name;
    
    function sayhi()
    {
        echo "Salam\n";
         $this->sayName();
    } 
    function sayName(){
        echo "My name is {$this->name}";
    }
}

class Cat
{
    function sayhi()
    {
        echo "Meow\n";
    }
}
class Dog
{
    function sayhi()
    {
        echo "Woof\n";
    }
}
$h1 = new Human();
$h2=new Human();
$h1->name="Shoab\n";// shoab called property -->set operation
$h2->name="Siddiq\n";
$c1 = new Cat();
$d1 = new Dog();

$h1->sayhi();
// echo $h1->name; //get operation
// $h1->sayName();
// $c1->sayhi();
// $d1->sayhi();
$h2->sayhi();
$c1->sayhi();