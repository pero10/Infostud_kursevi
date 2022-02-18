<?php
//Regular class

include_once "classes/simpleClass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();

//Anonymous class
//Najbolje je koristiti kada je potrebno samo jednom uraditi to u toku projekta

$newObj = new class(){
    public function helloWorld(){
        echo "Hello World!";
    }
};

$newObj->helloWorld();