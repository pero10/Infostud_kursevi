<?php
//video 10
//ovo se deklarise kako bi nam izbacivalo gresku prilikom unosa parametra
//da ukoliko unesemo parametar koji ne odgovara izbaci gresku i 'opomene' nas da unesemo redovan parametar
declare(strict_types = 1);


include_once 'classes/Person/person.class.php';
include_once 'classes/house.class.php';

//include 'includes/autoLoader.inc.php';
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
//$person1 = new Person();
//$person1->setName("Petar");
//echo $person1->name;
//
//$person2 = new Person();
//$person2->setName("Milenko");
//echo $person2->name;

//video 9
//$person1 = new Person\Person("Petar", 22);
//echo $person1->getPerson();
//echo '<br>';
//
//$house1 = new House("Sonje Marinkovic", 4);
//echo $house1->getAddress();

//video 10
$person1 = new \Person\Person("Petar", 22);
try{
    $person1->setName("Petar");
    echo $person1->getName();
}catch (TypeError $e){
    echo "Error!: " . $e->getMessage();
}
?>


</body>
</html>