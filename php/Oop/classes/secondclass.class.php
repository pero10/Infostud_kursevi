<?php
include "firstclass.class.php";

//Here is the second class example!
class SecondClass extends FirstClass{
    //Properties
    public static string $staticProperty = "A statis property!";

    //Methods
    public static function anotherTest()
    {
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

$b = SecondClass::anotherTest();
echo $b;
