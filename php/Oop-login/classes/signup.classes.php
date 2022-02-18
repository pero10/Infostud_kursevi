<?php
require_once "dbh.classes.php";

class Signup extends Database{

    protected function setUser($uid, $pwd, $email){
        $stmt = $this->connect()->prepare("INSERT INTO users(users_uid, users_pwrd, users_email) VALUES(?,?,?);");

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashedPwd, $email))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;

    }

    protected function checkUser($uid, $email){
        $stmt = $this->connect()->prepare("SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;");

        if(!$stmt->execute(array($uid, $email))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }


        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;
    }


}
