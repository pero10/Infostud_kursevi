<?php
include_once "users.class.php";

//controller

class UsersContr extends Users{

    public function createUser($name, $lastname, $dateOfBirth){

        $this->setUser($name, $lastname, $dateOfBirth);
    }
}
