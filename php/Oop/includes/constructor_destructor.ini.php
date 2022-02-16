<?php

class Person{
    //Properties
    //Ljudi vole da drze ove stvari privatno da ne bi svi imali pristup tome
    //kako bi se sto vise koristile metode get i set
    private $name;
    private $eyeColor;
    private $age;

    //constructor
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Methods
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    //destructor
    public function __destruct()
    {

    }
}

$person1 = new Person("Petar", "brown", 22);
//echo $person1->name . '<br>';
//echo $person1->eyeColor . '<br>';
//echo $person1->age . '<br>';
//$person1->setName("Milenko");
//echo $person1->name . '<br>';

echo $person1->getName();

