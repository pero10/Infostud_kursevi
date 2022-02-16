<?php

//video 9 - iz nekog razloga ne radi
spl_autoload_register('myAutoLoader');

//function myAutoLoader($className){
//    $path = "classes/";
//    $extension = ".class.php";
//    $fullPath = $path . $className . $extension;
//
//    if(!file_exists($fullPath)){
//        return false;
//    }
//
//    include_once $fullPath;
//}

//video 11

//function myAutoLoader($className){
//    $path = 'classes/';
//    $extension = '.class.php';
//    require_once $path . $className . $extension;
//}

function myAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'includes') !== false){
        $path = '../classes/';
    }else{
        $path = 'classes/';
    }
    $extension = '.class.php';
    require_once $path . $className . $extension;
}