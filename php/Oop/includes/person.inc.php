<?php
// private metode i properties ne mogu da se koriste iznvan te klase
// ako se pristupa podatcima iz te klase moze da se pristupi sa $this->imevarijable



class Person{
//video 4
//    public $first = "Petar";
//    private $last = "Zavisic";
//    private $age = "22";


//video 5
    //properties
    public $name;
    public $eyeColor;
    public $age;

    //Methods
    public function setName($name){
        $this->name = $name;
    }
}

//Svi propertiji i metode su implementirani u pet klasu (iz Person klase)

class Pet extends Person {
    public function owner(): string
    {
        $message = $this->first;
        return $message;
    }
}