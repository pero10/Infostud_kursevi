<?php
require_once "login.classes.php";

class LoginContr extends Login {

    private int $userId;
    private string $password;


    public function __construct(int $userId, string $password)
    {
        $this->userId = $userId;
        $this->password = $password;

    }

    public function logInUser()
    {
        if($this->emptyInput() == false){
            // echo "Empty input!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->userId, $this->password);
    }

    private function emptyInput(): bool
    {
        if(empty($this->userId) || empty($this->password)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}
