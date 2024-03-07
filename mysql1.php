<?php
//mysql login--------------------------------------------------------------------------------------------------
$chandu = mysqli_connect("localhost", "root", "", "my_db"); //server, username, password

//check connection
if (mysqli_connect_errno()) {
   echo "Failed to connect" . mysqli_connect_error();
} else {

   echo "<h2>Connected</h2>";
}
// mysqli_close($chandu);





//create db--------------------------------------------------------------------------------------------------

// $sql = "CREATE DATABASE my_db";
// if(mysqli_query($chandu,$sql)){
// echo  "Database created successfully.";
// }else
// echo   "Error creating database: ".mysqli_error($chandu)."<br>" ;

//db created--------------------------------------------------------------------------------------------------



//Create a table in  my_db database--------------------------------------------------------------------------------------------------

// $sql = "CREATE TABLE users (FirstName CHAR(30), LastName CHAR(30), Age INT)";

// if (mysqli_query($chandu, $sql)) {
//    echo "Table users created successfully.";
// } else {
//    echo "Error to create table in db" . mysqli_error($chandu) . "<br>";
// }

//table created in  my_db database--------------------------------------------------------------------------------------------------


//data insert into the  table --------------------------------------------------------------------------------

mysqli_query($chandu, "INSERT INTO users (FirstName, LastName, Age) VALUES('chandu', 'raparthi',24)");
mysqli_query($chandu, "INSERT INTO users (FirstName, LastName, Age) VALUES('sai', 's',24)");

mysqli_close($chandu);


?>