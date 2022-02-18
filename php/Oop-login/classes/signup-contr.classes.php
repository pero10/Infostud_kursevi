<?php
require_once "signup.classes.php";

class SignupContr extends Signup {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signUpUser(){
        if($this->emptyInput() == false){
            // echo "Empty input!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false){
            // echo "Invalid username!"
            header("location: ../index.php?error=invalidusername");
            exit();
        }
        if($this->invalidEmail() == false){
            // echo "Invalid email!"
            header("location: ../index.php?error=invalidemail");
            exit();
        }
        if($this->pwdMatch() == false){
            // echo "Passwords doesn't match!"
            header("location: ../index.php?error=pwdmatch");
            exit();
        }
        if($this->uidTakenCheck() == false){
            // echo "Users or email is taken!"
            header("location: ../index.php?error=uidtakencheck");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);

    }

    private function emptyInput(): bool
    {
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidUid(): bool
    {
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(): bool
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(): bool
    {
        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck(): bool
    {
        if($this->checkUser($this->uid, $this->email)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
}
