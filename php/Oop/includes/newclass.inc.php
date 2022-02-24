<?php

class NewClass{

    //Properties and methods goes here
    //public $info = "This is some info";

    //video 7
     public string $data = "I am a property";

     public function __construct()
     {
         echo "This class has been instantiated <br>";
     }

     public function setNewProperty(string $newdata)
     {
         $this->data = $newdata;
     }

     public function getProperty(): string
     {
         return $this->data;
     }

     public function __destruct()
     {
         echo "<br> This is the end of the class!";
     }


}

//mozemo da obrisemo objekat sa ugradjenom funkcijom unset(ime_objekta)
$object = new NewClass();
unset($object);
//echo $object->getProperty();
//echo $object->info;