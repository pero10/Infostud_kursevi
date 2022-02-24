<?php

//Scope Resolution Operator (::)

//Here is the first class example
class FirstClass{
    //Properties
    const EXAMPLE = "You can't change this!";

    //Methods
    public static function test(): string
    {
        return "This is a test!";
    }
}

//$a = FirstClass::EXAMPLE;
//echo $a;

$a = FirstClass::test();
echo $a;