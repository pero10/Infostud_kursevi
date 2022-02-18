<?php

if(isset($_POST["submit"])){

    //Grabbing the data

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdRepeat'];
    $email = $_POST['email'];

    //Instantiate SignupContr class
    require_once "../classes/dbh.classes.php";
    require_once "../classes/signup.classes.php";
    require_once "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // Running error handlers and user signup

    $signup->signUpUser();

    // Going back to front page
    header("Location: ../index.php?error=none");
}
