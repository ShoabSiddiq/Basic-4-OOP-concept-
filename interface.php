<?php

use Human as GlobalHuman;

interface BaseAnimal  //interface class onno class k extend krte pare but normal class kono interface k extend krte pare na implement krte pare
{
    function isAlive();
    function canEat($par1, $par2);
    function breed();
}

  class Animal implements BaseAnimal
{
    function isAlive()
    {
    }
    function canEat($par1, $par2)
    {
    }
    function breed()
    {
    }
}

interface BaseHuman extends BaseAnimal
{
    function canTalk();
}

class Human implements BaseHuman
{
    function isAlive()
    {
    }
    function canEat($par1, $par2)
    {
    }
    function breed()
    {
    }
    function canTalk()
    {
    }
}

$h = new Human();
// echo $h instanceof BaseAnimal;

$cat=new Animal();
echo $cat instanceof BaseAnimal ;
