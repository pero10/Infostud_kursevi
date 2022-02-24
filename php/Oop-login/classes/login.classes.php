<?php
require_once "dbh.classes.php";

class Login extends Database{

    protected function getUser(int $uid,string $pwd)
    {
        $stmt = $this->connect()->prepare("SELECT users_pwrd FROM users WHERE users_uid - ? OR users_email = ?;");

        if(!$stmt->execute(array($uid, $pwd))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() > 0)
        {
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //POSTOJI NEKI PROBLEM SA OVIM HESOVANJEM..
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwrd"]);

        if($checkPwd == false){
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true){
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_uid - ? OR users_email = ? AND users_pwrd = ?;");

            if(!$stmt->execute(array($uid, $uid, $pwd))){
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("Location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['userid'] = $user[0]['users_id'];
            $_SESSION['useruid'] = $user[0]['users_uid'];

        }

        $stmt = null;

    }
}
