<?php
include 'includes/person.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php 

/*
   $pet01 = new Pet();

   echo $pet01->owner(); // here we are referencing the owner function inside person.inc.php



   if we were to run this code below without the $person1->setName("Daniel") nothing would display in the browser because we havent actually set the property inside this object we just created


   $person1 = new Person();
   $person1->setName("Daniel");    
   echo $person1->name;


   the code below would not display anything because this is a second object we created and we havent yet set a value for the second object. the name daniel is a vlaue for the first object
   for the code below to display something we would again have to use the setName method

   $person2 = new Person();
   $person2->setName("Timmy");    setName method
   echo $person2->name;

*/


   $pet01 = new Person();

   echo $pet01->first;
?>
    
</body>
</html>