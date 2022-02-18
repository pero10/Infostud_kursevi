<?php
//    include "../includes/autoLoader.inc.php";
    include_once "dbh.class.php";
    include_once "test.class.php";
    include_once "MVC/users.class.php";
    include_once "MVC/usersview.class.php";
    include_once "MVC/userscontr.class.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//    video 17
//    $testObj = new Test();
//    $testObj->getUsers();
//    $testObj->getUsersStmt("Petar", "Zavisic");
//    $testObj->setUsersStmt("Brigita", "Hoki", "2000-08-23");


//    video 18
$usersObj = new UsersView();
$usersObj->showUser("Uros");

$usersObj2 = new UsersContr();
$usersObj2->createUser("Jane", "Doe", "1834-05-11")


?>

</body>
</html>
