<?php
    declare(strict_types = 1);
    //include 'autoLoader.inc.php';
    require_once '../classes/calc.class.php';


    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['oper'];

    $object = new Calculator($oper, (int)$num1, (int)$num2);

    try{
        echo $object->calculator();
    }catch (TypeError $e){
        echo "Error!: " . $e->getMessage();
    }

