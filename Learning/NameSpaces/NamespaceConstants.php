<?php 


// namespace defines namespace
namespace myconstants;
// we have defined a constant here



// we have defined a constant in this namespace file 
const FILE_NAME = __NAMESPACE__ "\NamespaceConstants.php"



// include the namespace file
include "NamespaceConstants.php";

// access 
echo MyConstants\FILE_NAME;

?>