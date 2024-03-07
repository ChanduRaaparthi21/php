<?php


/*SuperGlobals are

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION 
*/


//we use out side variables in function

$a = 10;
$b = 20;

function addition(){

   $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];

}
addition();
echo $c;


?>