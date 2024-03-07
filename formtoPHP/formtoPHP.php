<?php

$chandu= mysqli_connect( "localhost", "root","","my_db");  

//check connection
if(mysqli_connect_errno()) {
   die ("MySQL Connection failed: ". mysqli_connect_error());
}


//escape variable for security

$firstname= mysqli_real_escape_string($chandu, $_POST['firstname']); 
$lastname= mysqli_real_escape_string($chandu, $_POST['lastname']); 
$age= mysqli_real_escape_string($chandu, $_POST['age']); 


$sql =  "INSERT INTO users (FirstName, LastName, Age) VALUES('$firstname', '$lastname', '$age')";


if(!mysqli_query($chandu,$sql)){

   die ("Error". mysqli_error($chandu));

}
   echo  "<h2>One is Data Inserted</h2";

mysqli_close( $chandu );

?>