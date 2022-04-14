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
// here we have created an object and filled it with the properties 
   $person1 = new Person("Daniel", "Blue", 28);
   
   echo $person1->name; 
   echo $person1->eyeColor; 
   $person1->setName("John"); 
   // here we are setting a new name "John"
   // so after this particular code the name property will be john

?>
    
</body>
</html>