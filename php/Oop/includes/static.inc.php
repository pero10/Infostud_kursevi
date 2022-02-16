<?php

class Person{
    //Properties
    private $name;
    private $eyeColor;
    private $age;

    //Ne moze biti promenjeno, uvek ce biti 21
    public static int $drinkingAge = 21;

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

    public function getDa(): int
    {
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newAge){
        self::$drinkingAge = $newAge;

    }

    //destructor
    public function __destruct()
    {

    }
}

//video 8 - static
//Kada prizivamo static metode onda moramo da ih pozivamo sa :: umesto sa ->
echo Person::$drinkingAge . '<br>';
//Jedino ovako mozemo da promenimo static metodu i to ostaje dokle god se ponovo ne promeni - za svaku osobu ce biti isto
Person::setDrinkingAge(18);
echo Person::$drinkingAge . '<br>';
$object = new Person("Petar", "brown", 22);
echo $object->getDa();

