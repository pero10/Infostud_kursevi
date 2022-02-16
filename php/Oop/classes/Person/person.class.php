<?php

namespace Person;

class Person{
    //Properties
    private $name;
    public $eyeColor;
    private $age;

    //constructor
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //Methods
    public function getPerson(){
        return $this->name;
    }

    /*
     By using type declaration, we can throw an error if wrong type is given
     Works with:
     - class/interface names
     - self(used to reference to same class)
     - array, callable, bool, float, int, string, iterable, object
     */

    public function setName(string $newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }

    //destructor
    public function __destruct()
    {

    }
}