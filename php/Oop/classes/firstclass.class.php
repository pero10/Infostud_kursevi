<?php

//Scope Resolution Operator (::)

//Here is the first class example
class FirstClass{
    //Properties
    const EXAMPLE = "You can't change this!";

    //Methods
    public static function test(){
        $testing = "This is a test!";
        return $testing;
    }
}

//$a = FirstClass::EXAMPLE;
//echo $a;

$a = FirstClass::test();
echo $a;