<?php
include_once 'includes/person.inc.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index oop</title>
</head>
<body>

<?php
// video 4

//$pet01 = new Person();
//echo $pet01->owner();
////ispisuje Petar

//$pet01 = new Pet();
//echo $pet01->owner();
// Ispisuje hi there!

//$pet01 = new Pet();
//echo $pet01->owner();
//ispisuje petar ali mora da se stavi protected za metodu

//$pet01 = new Person();
//echo $pet01->first;
//ispisuje Petar ali first mora da se postavi na public



//video 5
$person1 = new Person();
$person1->setName("Petar");
echo $person1->name;

$person2 = new Person();
$person2->setName("Milenko");
echo $person2->name;
?>


</body>
</html>