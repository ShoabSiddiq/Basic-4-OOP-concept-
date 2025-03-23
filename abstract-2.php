<?php 

abstract class Ourclass {
  final  function doSomething(){ //final means oi function k override krte prbo na
        echo "Doing Something";
    }
}

class Myclass extends Ourclass{
    // function doSomething(){
    //     echo "Doing Nothing";
    // }
}

$mc= new Myclass();
$mc->doSomething();