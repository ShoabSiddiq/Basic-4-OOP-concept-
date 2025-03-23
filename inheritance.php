<?php 
class ParentClass{
    protected $name;
    function __construct($name){
        $this->name=$name;
        $this->sayHi();
    }

    function sayHi(){
    echo "Hi from {$this->name}\n";
    }
}

class ChilClass extends ParentClass{
    function sayHi()
    {   parent::sayHi();
        echo "Hello\n";
    }
}

$cc=new ChilClass("ABCD"); 