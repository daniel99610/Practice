<?php

// write a function. return empty if input parameters are empty





// without the return statement. everything will be printed. when you put the return statement


if( empty($userRoles) ){
    echo "Roles cannot be empty";
    return; // you can also use this return statement to break a function
    // return can also return some value from the function
}
// do not execute this code when $userRoles is empty
function checkUserRoles($userRoles){
    switch($userRoles){
        case "Admin":
            echo "Hello Admin!";
            break;
        case "Editor":
            echo "Hello Editor";
            break;
        case "default":
    }

}

checkUserRoles("Admin");
checkUserRoles(""); // we dont want to run the above function when someone does an empty thing like here
// we want to have som ekind of return statement from the function
checkUserRoles("Editor");

?>