<?php

class Database{

    protected function connect(){
        try {
            $username = "admin";
            $password = "admin";

            $dbh = new PDO('mysql:host=localhost;dbname=oopLogin', $username, $password);
            return $dbh;
        }catch (PDOException $e){
            echo "Error: " . $e->getMessage() . "<br>";
            die();
        }
    }
}
