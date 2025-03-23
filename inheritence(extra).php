<?php 
class Shape{

}
class Shapes{
    private $shapes;
    function __construct()
    {
        $this->shapes = array();
    }
    function addShape(Shape $shape){
        array_push($this->shapes,$shape);
    }
    function totalShapes(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape{

}
class Triangle extends Shape{

}

$shapecollection=new Shapes();
$shapecollection->addShape(new Rectangle());
$shapecollection->addShape(new Triangle());
// $shapecollection->addShape(new Student());

echo $shapecollection->totalShapes();