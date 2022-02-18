<?php
include_once "dbh.class.php";

class Test extends Dbh{

    public function getUsers(){
        $sql = "SELECT  * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['users_firstname'] . '<br>';
        }
    }

    public function getUsersStmt($firstName, $lastName){
        $sql = "SELECT  * FROM users WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName]);
        $names = $stmt->fetchAll();

        foreach ($names as $name){
            echo "<h1>Users are </h1>";
            echo $name['users_firstname'] . " " . $name['users_lastname'];
        }
    }


    public function setUsersStmt($firstName, $lastName, $dateOfBirth){
        $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth)
                VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dateOfBirth]);
    }
}
