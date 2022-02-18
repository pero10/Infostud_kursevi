<?php

if(isset($_POST["submit"])) {

    //Grabbing the data

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    //Instantiate SignupContr class
    require_once "../classes/dbh.classes.php";
    require_once "../classes/login.classes.php";
    require_once "../classes/login-contr.classes.php";

    $signup = new LoginContr($uid, $pwd);

    // Running error handlers and user signup

    $signup->logInUser();

    // Going back to front page

}
?>
<h1>Dobrodosao</h1>
<a href="logout.inc.php">Logout</a>
